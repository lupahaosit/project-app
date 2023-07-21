
<form method="POST" action="{{ route('registerStudy') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Имя')" />
        <x-text-input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Почта')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"></x-text-input>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    @isset($data)
       <div style="color: red"> пароли не совпадают</div>
    @endif
    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full inputPassword"
                      type="password"
                      name="password"
                      required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation inputPasswordConfirm" class="block mt-1 w-full"
                      type="password"
                      name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
 <script>
     function PasCheck(){
         x = $(".input").text()
         y = $(".inputPasswordConfirm").text()
         if(x !== y){

         }
     }

 </script>


    <input type="submit" onclick="PasCheck()">
</form>

