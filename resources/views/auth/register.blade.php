

<body>
    <main class="container">
    <!-- Session Status -->
    <x-auth-session-status class="mb-5" :status="session('status')" />

<!-- Validation Errors -->
        <x-auth-validation-errors style="color:red !important;" class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('login') }}">
            <h2>Registro</h2>

            @csrf

            <!-- Name -->
            <div class="input-field">
                <label for="name" :value="__('Name')" />

                <input placeholder="Name"  id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="input-field ">
                <input placeholder="Enter your Email" id="email" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Password -->
            <div class="input-field ">
                <input id="password" 
                                placeholder="Enter your password"
                                type="password"
                                name="password"
                                required />
               
            </div>

                 <!-- Confirm Password -->
            <div class="input-field">
                <label for="password_confirmation" :value="__('Confirm Password')" />

                <input placeholder="Confirm password" id="password_confirmation" type="password" name="password_confirmation" required />
            </div>

                <button >
                    {{ __('Registrar') }}
                </button>
            <!-- Remember Me -->
            <footer>
            <div>
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

             
            </div>   
            </footer>
            
        </form>                 
    </main>

</body>
        


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

* {
    margin:0;
    padding:0;
    border:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body {

background:linear-gradient(45deg, #6ECF79, #4a00e0);
background-repeat:no-repeat;
min-height: 100vh;
min-width:100vw;
justify-content:center;
align-items:center;
display:flex;
}

main.container {
    background-color:#fff;
    min-width:350px;
    min-height:70vh;
    padding:4rem;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.4);
    border-radius: 8px;

}

main h2 {
    font-weight:700;
    font-size:2rem;
    margin-bottom: 1rem;
    text-align:center;
}

.input-field input{
    outline:none;
    font-size:1rem;
    color:rgba(0, 0, 0, 2);
    margin: 1.25rem 0;
    padding:0.5rem 2rem;
    width:100%;
    border:solid #9e24e9;
    border-radius:10px;   
}

.input-field .underline::before{
    content:'';
    position:absolute;
    height: 1px;
    width: 100%;
    bottom: -5px;
    left: 0;
    background-color:black;
}
button {
    display:flex;
    justify-content:center;
    margin-top:2rem;
    padding: 0.5rem;
    background:linear-gradient(to left, #4776e6, #8e54e9);
    margin-bottom:0.75rem;
    cursor:pointer;
    color:#fff;
    font-size:0.9rem;
    font-weight: 300;
    border-radius:20px;
}

form{
    display:flex;
    flex-direction:column;

}

button:hover{
    background:linear-gradient(to right, #4776e6, #8e54e9);
}
footer a{
    text-decoration:none;
}


.underline::after{
   
}
</style>