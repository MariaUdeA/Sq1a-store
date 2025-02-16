<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>
<main class="flex-1 flex-col justify-items-center">
    <div class="w-full p-8 max-w-7xl flex-1 flex-col">
        <h2 class="text-black font-normal text-3xl md:text-5xl text-left font-volkhov md:py-8 py-6">
            {{__('Remember password')}}
        </h2>

        <div class="mb-4 text-sm md:text-xl text-gray-600 font-poppins">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form wire:submit="sendPasswordResetLink">
            <!-- Email Address -->
            <div class="font-poppins">
                <x-input-label class="text-sm md:text-lg" for="email" :value="__('Email')" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full max-w-[60rem]" type="email" name="email" required autofocus placeholder="name@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-8">
                <x-primary-button class="font-poppins">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</main>
