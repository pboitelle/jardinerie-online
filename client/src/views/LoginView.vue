<script>
import {ref} from 'vue'
import axios from 'axios'
import {getUsers} from '../services/UserService'

export default {
  name: 'LoginView',
  setup() {
    const email = ref('')
    const password = ref('')

    // getUsers().then(res => {
    //   console.log(res)
    // })

    const login = async () => {
      const response = await axios.post('http://localhost:9000/api/auth', JSON.stringify({
        email: email.value,
        password: password.value
      }), {
        headers: {
          'Content-Type': 'application/json'
        }
      })
      console.log(response)

      if(response.data.success) {
        localStorage.setItem('token', response.data.token)
        localStorage.setItem('user', JSON.stringify(response.data.user))
        window.location.href = '/account'
      }
    }

    return {
      email,
      password,
      login
    }
  }
}


</script>

<template>
  <div class="main">
    <form class="form" @submit.prevent="login">
        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <input v-model="email" type="email" id="email" class="form__input" />
        </div>
        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <input v-model="password"  type="password" id="password" class="form__input" />
        </div>
        <button class="btn btn-success">Login</button>
        <div>
            <p>Don't have an account? <router-link to="/register">Register</router-link></p>
        </div>
    </form>
  </div>
</template>

<style scoped>
    .form {
        width: 30rem;
        margin: auto;
        padding: 3rem;
        border-radius: 1rem;
        color: #000;
        font-size: large;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.8);
    }
    
    .form__group {
        margin-bottom: 2rem;
    }
    
    .form__label {
        display: block;
        margin-bottom: 0.5rem;
    }
    
    .form__input {
        display: block;
        width: 100%;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 0.25rem;
    }
    
    .form__input:focus {
        outline: none;
        border-color: #333;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 0.25rem;
        cursor: pointer;
    }
</style>