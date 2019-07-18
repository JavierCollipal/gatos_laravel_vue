<template>
  <div>
    <div class="alert alert-danger" v-if="error">
      <p>No fue posible ingresar con tus credenciales.</p>
      <p v-text="errors"></p>
    </div>
    <!--formulario de ingreso-->
    <!--entra usando correo y contraseña-->

    <el-row>
      <el-col :span="6" :offset="9">
        <el-form ref="form" :model="formulario">
          <el-form-item label="Email">
            <el-input v-model="formulario.email" placeholder="usuario@ejemplo.com" type="email"></el-input>
          </el-form-item>
          <el-form-item label="Contraseña">
            <el-input v-model="formulario.password" type="password"></el-input>
          </el-form-item>
          <el-form-item>
            <el-button type="primary" @click="login">Ingresa!</el-button>
          </el-form-item>
        </el-form>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formulario: {
        email: null,
        password: null
      },
      error: false,
      errors: {}
    };
  },
  mounted() {},
  methods: {
    //metodo de login, en caso exitoso volvemos al inicio y generamos una recarga(para poder usar el token)
    login() {
      axios
        .post("login", {
          email: this.formulario.email,
          password: this.formulario.password
        })
        .then(response => {
          this.$router.push("/");
          this.$router.go("/");
        })
        .catch(error => {
          this.error = true;
          //si el controlador del backend cuenta con un validador, ej validator de laravel
          //podemos pasar el objeto contenedor de mensajes
          this.errors = error.response.data;
        });
    }
  }
};
</script>
