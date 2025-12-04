<script setup lang="ts">
import { ref, onMounted, computed, watch } from 'vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Animaux',
        href: dashboard().url,
    },
];

const animals = ref<any[]>([]);
const loading = ref(false);
const error = ref<string | null>(null);
const query = ref('');
const typeFilter = ref('all');

async function fetchAnimals() {
    loading.value = true;
    error.value = null;
    try {
        const params = new URLSearchParams();
        if (typeFilter.value && typeFilter.value !== 'all') params.set('type', typeFilter.value);
    const url = params.toString() ? `/animals?${params.toString()}` : '/animals';

        
        console.debug('[Dashboard] fetch', url);

        const res = await fetch(url, {
            method: 'GET',
            credentials: 'include',
            headers: { 'Accept': 'application/json' },
        });

        if (!res.ok) throw new Error(`HTTP ${res.status}`);

        const json = await res.json();
        animals.value = Array.isArray(json) ? json : (json.data ?? []);
    } catch (e: any) {
        error.value = e?.message ?? String(e);
        animals.value = [];
    } finally {
        loading.value = false;
    }
}

onMounted(fetchAnimals);

watch(typeFilter, () => {
    fetchAnimals();
});

const filtered = computed(() => {
    const q = query.value.trim().toLowerCase();

    return animals.value.filter(a => {
        const name = String(a.name ?? '').toLowerCase();
        const desc = String(a.description ?? '').toLowerCase();

        return !q || name.includes(q) || desc.includes(q);
    });
});
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex w-full flex-col gap-6 p-6">
            <header class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Animaux</h1>
                    <p class="text-sm text-black">Découvrez la liste des animaux enregistrés.</p>
                </div>

                <div class="flex items-center gap-3">
                    <input
                        v-model="query"
                        type="search"
                        placeholder="Rechercher un animal"
                        class="rounded-md border bg-white px-3 py-2 text-sm shadow-sm placeholder:text-black focus:ring-2 focus:ring-primary"
                    />

                    <select v-model="typeFilter" class="rounded-md border bg-white px-3 py-2 text-sm shadow-sm">
                        <option value="all">Tous</option>
                        <option value="chat">Chat</option>
                        <option value="chien">Chien</option>
                        <option value="oiseau">Oiseau</option>
                    </select>

                    <button @click="fetchAnimals" class="rounded-md bg-primary px-3 py-2 text-sm text-white">Rafraîchir</button>
                </div>
            </header>

            <section>
                <div v-if="loading" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div v-for="n in 6" :key="n" class="h-64 animate-pulse rounded-lg bg-gray-100 p-4" />
                </div>

                <div v-else-if="error" class="rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    Erreur : {{ error }}
                </div>

                <div v-else>
                    <div v-if="filtered.length === 0" class="rounded-lg border p-6 text-center text-sm text-black">
                        Aucun animal trouvé.
                    </div>

                    <ul v-else class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <li v-for="animal in filtered" :key="animal.id" class="group rounded-lg border p-4 hover:shadow-lg">
                            <div class="flex flex-col">
                                <div class="w-full overflow-hidden rounded-md bg-gray-50 flex items-center justify-center">
                                    <img
                                        v-if="animal.image"
                                        :src="animal.image"
                                        :alt="animal.name"
                                        class="w-full max-h-56 sm:max-h-80 md:max-h-96 object-contain"
                                    />

                                    <div v-else class="h-48 w-full flex items-center justify-center text-6xl font-semibold text-black">
                                        {{ (animal.name || '').charAt(0).toUpperCase() }}
                                    </div>
                                </div>

                                <div class="mt-4 flex flex-col">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-semibold">{{ animal.name }}</h3>
                                        <span v-if="animal.type || animal.species" class="ml-2 rounded-full bg-primary/10 px-2 py-1 text-xs font-medium text-primary">{{ animal.type || animal.species }}</span>
                                    </div>

                                    <p class="mt-2 text-sm text-black">{{ animal.description }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </AppLayout>
</template>
