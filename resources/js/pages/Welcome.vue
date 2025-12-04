<script setup lang="ts">
import { dashboard, login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>
    <Head title="Animal Rescue SPA">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div
        class="flex min-h-screen flex-col items-center bg-gradient-to-br from-blue-50 to-emerald-50 p-6 text-gray-800 lg:justify-center lg:p-8 dark:from-gray-900 dark:to-gray-800"
    >
        <header
            class="mb-6 w-full max-w-6xl text-sm"
        >
            <nav class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-emerald-500">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-blue-700 dark:text-blue-400">Animal Rescue</span>
                </div>
                <div class="flex items-center gap-4">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="dashboard()"
                        class="inline-block rounded-full bg-gradient-to-r from-blue-500 to-emerald-500 px-6 py-2.5 text-sm font-medium text-white shadow-lg hover:from-blue-600 hover:to-emerald-600 transition-all duration-300"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            :href="login()"
                            class="inline-block rounded-full border-2 border-blue-500 bg-transparent px-6 py-2.5 text-sm font-medium text-blue-600 hover:bg-blue-50 transition-all duration-300 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-900/30"
                        >
                            Se connecter
                        </Link>
                        <Link
                            v-if="canRegister"
                            :href="register()"
                            class="inline-block rounded-full bg-gradient-to-r from-orange-500 to-pink-500 px-6 py-2.5 text-sm font-medium text-white shadow-lg hover:from-orange-600 hover:to-pink-600 transition-all duration-300"
                        >
                            S'inscrire
                        </Link>
                    </template>
                </div>
            </nav>
        </header>
        
        <div class="flex w-full items-center justify-center lg:grow">
            <main class="w-full max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div>
                            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white leading-tight">
                                Donnez une seconde chance
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-600">
                                    aux animaux
                                </span>
                            </h1>
                            <p class="mt-6 text-xl text-gray-600 dark:text-gray-300">
                                Rejoignez notre communauté dédiée à la protection et à l'adoption 
                                des animaux abandonnés. Ensemble, faisons la différence.
                            </p>
                        </div>
                        
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">1,500+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Animations sauvés</div>
                            </div>
                            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">800+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Familles adoptantes</div>
                            </div>
                            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-orange-600 dark:text-orange-400">24/7</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Urgence vétérinaire</div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <Link
                                :href="login()"
                                v-if="!$page.props.auth.user"
                                class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-blue-500 bg-transparent px-8 py-4 text-lg font-semibold text-blue-600 hover:bg-blue-50 transition-all duration-300 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-900/30"
                            >
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Voir les animaux
                            </Link>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                            <img 
                                src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                alt="Chien à adopter"
                                class="w-full h-96 object-cover"
                            />
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-white">Max</h3>
                                        <p class="text-gray-200">Labrador • 2 ans</p>
                                    </div>
                                    <span class="rounded-full bg-green-500 px-4 py-1 text-sm font-semibold text-white">
                                        À adopter
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute -top-6 -right-6 w-56 overflow-hidden rounded-2xl shadow-xl transform rotate-12">
                            <img 
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRib-IUrp84BLUgC0TDix4CTxX89W_D1vqQ4iFMU8cUO33Lf2_9pOUBfoPmrGKLFYNA5jdqxUxyySavMwaEMkHAhn8QpKgMEugZhPG9NEyY&s=10" 
                                alt="Lapin à adopter"
                                class="w-full h-40 object-cover"
                            />
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h4 class="font-bold text-white">Carotte</h4>
                                <p class="text-sm text-gray-200">Lapin • 6 mois</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-24 grid md:grid-cols-3 gap-8">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="w-14 h-14 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Protection</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Nous offrons un refuge sécurisé aux animaux abandonnés ou maltraités avec des soins vétérinaires complets.
                        </p>
                    </div>
                    
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="w-14 h-14 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Adoption</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Trouvez votre compagnon idéal parmi nos animaux et bénéficiez d'un suivi post-adoption.
                        </p>
                    </div>
                    
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="w-14 h-14 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Éducation</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Sensibilisation du public et formations pour promouvoir le bien-être animal dans notre société.
                        </p>
                    </div>
                </div>
            </main>
        </div>
        
        <footer class="mt-16 w-full max-w-6xl border-t border-gray-200 dark:border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center gap-2 mb-4 md:mb-0">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-emerald-500">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span class="text-lg font-bold text-gray-800 dark:text-white">Animal Rescue SPA</span>
                </div>
                <div class="text-gray-600 dark:text-gray-400 text-center md:text-right">
                    <p>© 2024 Société Protectrice des Animaux. Tous droits réservés.</p>
                    <p class="text-sm mt-1">contact@animal-rescue-spa.org • 01 23 45 67 89</p>
                </div>
            </div>
        </footer>
    </div>
</template>
