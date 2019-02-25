<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>No fue posible ingresar con tus credenciales.</p>
            <p v-text="errors"></p>
        </div>
        <form autocomplete="off" @submit.prevent="login">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default">Ingresa</button>
        </form>
    </div>
</template>

<script>

    export default {
        data(){
            return {
                email: null,
                password: null,
                error: false,
                errors: {}
            }
        },
        mounted(){
        },
        methods: {
            login(){
                axios.post('login',{
                    email: this.email,
                    password: this.password
                }).then(response =>{
                    this.$router.go('/');
                    this.$router.push('/');
                }).catch(error =>{
                    this.error = true;
                    this.errors = error.response.data;
                })
            },
        }
    }
</script>
