<template>
    <div>
        <div class="alert alert-danger" v-if="error && !success">
            <p>Error al registrar, Vuelva a verificar su registro.</p>
        </div>
        <div class="alert alert-success" v-if="success">
            <p>Registro completo, ya puedes ingresar<router-link :to="{name:'ingreso'}">Ingresa.</router-link></p>
        </div>
        <form autocomplete="off" v-on:submit.prevent="register" v-if="!success">
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.errors.username }">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" v-model="name" required>
                <span class="help-block" v-if="error && errors.errors.name">{{ errors.errors.name[0] }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.errors.email }">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                <span class="help-block" v-if="error && errors.errors.email">{{ errors.errors.email[0] }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.errors.password }">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
                <span class="help-block" v-if="error && errors.errors.password">{{ errors.errors.password[0] }}</span>
            </div>
            <button type="submit" class="btn btn-default">Registrarse</button>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: '',
                email: '',
                password: '',
                error: false,
                errors: {},
                success: false
            };
        },
        methods: {
            register(){
                axios.post('api/register',{
                    name: this.name,
                    email: this.email,
                    password: this.password

                }).then(response =>{
                    this.success = true;
                }).catch(error =>{
                    this.error = true;
                    this.errors = error.response.data;
                })
            }
        }
    }
</script>