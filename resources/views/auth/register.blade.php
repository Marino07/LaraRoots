<x-layout>
    <x-slot name='heading'>
        Register
    </x-slot>

    <form action="/register" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Polje za unos imena -->
                    <x-form-field>
                        <x-form-label for='first_name'>
                            First Name
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" />
                            <!-- Prikaz greške za first_name -->
                            <x-form-error name='first_name' />
                        </div>
                    </x-form-field>

                    <!-- Polje za unos prezimena -->
                    <x-form-field>
                        <x-form-label for='last_name'>
                            Last Name
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" />
                            <!-- Prikaz greške za last_name -->
                            <x-form-error name='last_name' />
                        </div>
                    </x-form-field>

                    <!-- Polje za unos emaila -->
                    <x-form-field>
                        <x-form-label for='email'>
                            Email
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type='email' />
                            <!-- Prikaz greške za email -->
                            <x-form-error name='email' />
                        </div>
                    </x-form-field>

                    <!-- Polje za unos lozinke -->
                    <x-form-field>
                        <x-form-label for='password'>
                            Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type='password' />
                            <!-- Prikaz greške za password -->
                            <x-form-error name='password' />
                        </div>
                    </x-form-field>

                    <!-- Polje za potvrdu lozinke -->
                    <x-form-field>
                        <x-form-label for='password_confirmation'>
                            Confirm Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type='password' />
                            <!-- Prikaz greške za password_confirmation -->
                            <x-form-error name='password_confirmation' />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button type='submit'>Register</x-form-button>
        </div>
    </form>
</x-layout>
