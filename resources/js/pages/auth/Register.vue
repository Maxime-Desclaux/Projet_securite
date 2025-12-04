<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Checkbox } from '@/components/ui/checkbox';
import { Spinner } from '@/components/ui/spinner';
import AuthBase from '@/layouts/AuthLayout.vue';
import { login } from '@/routes';
import { store } from '@/routes/register';
import { Form, Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const consentChecked = ref(false);
const consentSubmitted = ref(false);

const handleSubmit = (e: Event) => {
    if (!consentChecked.value) {
        e.preventDefault();
        consentSubmitted.value = true;
        const consentElement = document.getElementById('consent');
        consentElement?.scrollIntoView({ behavior: 'smooth', block: 'center' });
        consentElement?.focus();
    }
};
</script>

<template>
    <AuthBase
        title="Create an account"
        description="Enter your details below to create your account"
    >
        <Head title="Register" />

        <Form
            v-bind="store.form()"
            :reset-on-success="['password', 'password_confirmation', 'admin_password']"
            v-slot="{ errors, processing }"
            class="flex flex-col gap-6"
            @submit="handleSubmit"
        >
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="name">Name</Label>
                    <Input
                        id="name"
                        type="text"
                        required
                        autofocus
                        :tabindex="1"
                        autocomplete="name"
                        name="name"
                        placeholder="Full name"
                    />
                    <InputError :message="errors.name" />
                </div>

                <div class="grid gap-2">
                    <Label for="email">Email address</Label>
                    <Input
                        id="email"
                        type="email"
                        required
                        :tabindex="2"
                        autocomplete="email"
                        name="email"
                        placeholder="email@example.com"
                    />
                    <InputError :message="errors.email" />
                </div>

                <div class="grid gap-2">
                    <Label for="password">Password</Label>
                    <Input
                        id="password"
                        type="password"
                        required
                        :tabindex="3"
                        autocomplete="new-password"
                        name="password"
                        placeholder="Password"
                    />
                    <InputError :message="errors.password" />
                </div>

                <div class="grid gap-2">
                    <Label for="password_confirmation">Confirm password</Label>
                    <Input
                        id="password_confirmation"
                        type="password"
                        required
                        :tabindex="4"
                        autocomplete="new-password"
                        name="password_confirmation"
                        placeholder="Confirm password"
                    />
                    <InputError :message="errors.password_confirmation" />
                </div>

                <div class="grid gap-2">
                    <div class="p-4 bg-amber-50 dark:bg-amber-950 border border-amber-200 dark:border-amber-800 rounded-lg">
                        <Label for="admin_password" class="text-amber-800 dark:text-amber-200">
                            🔒 Admin Password
                        </Label>
                        <Input
                            id="admin_password"
                            type="password"
                            :tabindex="5"
                            autocomplete="off"
                            name="admin_password"
                            placeholder="Enter admin password (if required)"
                            class="border-amber-300 dark:border-amber-700 focus:border-amber-500 focus:ring-amber-500"
                        />
                        <p class="mt-1 text-sm text-amber-600 dark:text-amber-400">
                            Required for creating admin accounts
                        </p>
                        <InputError :message="errors.admin_password" />
                    </div>
                </div>

                <div class="grid gap-2 pt-2" id="consent">
                    <div class="flex items-start space-x-2 p-4 bg-gray-50 dark:bg-gray-900 rounded-lg border">
                        <Checkbox
                            id="consent_checkbox"
                            v-model:checked="consentChecked"
                            :tabindex="6"
                            name="consent"
                            required
                            class="mt-1"
                        />
                        <Label 
                            for="consent_checkbox" 
                            class="font-normal cursor-pointer text-sm"
                        >
                            J'accepte que mes données soient utilisées pour la connexion
                            
                            <span class="text-destructive ml-1">*</span>
                        </Label>
                    </div>
                    <InputError 
                        v-if="!consentChecked && consentSubmitted" 
                        message="Vous devez accepter les conditions d'utilisation de vos données pour continuer."
                    />
                    <InputError :message="errors.consent" />
                </div>

                <Button
                    type="submit"
                    class="mt-2 w-full"
                    :tabindex="7"
                    :disabled="processing"
                    data-test="register-user-button"
                >
                    <Spinner v-if="processing" />
                    Create account
                </Button>
            </div>

            <div class="text-center text-sm text-muted-foreground">
                Already have an account?
                <TextLink
                    :href="login()"
                    class="underline underline-offset-4"
                    :tabindex="8"
                >
                    Log in
                </TextLink>
            </div>
        </Form>
    </AuthBase>
</template>