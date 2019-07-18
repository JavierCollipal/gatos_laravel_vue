<template>
  <div>
    <div class="alert alert-danger" v-if="error && !success">
      <p>Error al registrar, Vuelva a verificar su registro.</p>
    </div>
    <!--formulario de registro-->
    <!--en este formulario hacemos uso del objeto errors,indicando el tipo de error si una variable no cumplio
    los parametros del backend-->
    <el-row>
      <el-col :span="6" :offset="9" v-if="success">
        <div class="alert alert-success">
          <p>
            Registro completo, ya puedes ingresar
            <router-link :to="{name:'ingreso'}">Ingresa.</router-link>
          </p>
        </div>
      </el-col>
      <el-col :span="6" :offset="9" v-else>
        <el-form ref="form" :model="formulario">
          <el-form-item
            label="Nombre"
            v-bind:class="{ 'has-error': error && errors.errors.username }"
          >
            <el-input v-model="formulario.name" placeholder="Juan Perez" type="text"></el-input>
            <span class="help-block" v-if="error && errors.errors.name">{{ errors.errors.name[0] }}</span>
          </el-form-item>
          <el-form-item label="Email" v-bind:class="{ 'has-error': error && errors.errors.email }">
            <el-input v-model="formulario.email" placeholder="usuario@ejemplo.com" type="email"></el-input>
            <span
              class="help-block"
              v-if="error && errors.errors.email"
            >{{ errors.errors.email[0] }}</span>
          </el-form-item>
          <el-form-item
            label="Contraseña"
            v-bind:class="{ 'has-error': error && errors.errors.password }"
          >
            <el-input v-model="formulario.password" type="password"></el-input>
            <span
              class="help-block"
              v-if="error && errors.errors.password"
            >{{ errors.errors.password[0] }}</span>
          </el-form-item>
          <el-form-item>
            <el-button type="primary" @click="register">Registrate!</el-button>
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
        name: "",
        email: "",
        password: ""
      },
      error: false,
      errors: {},
      success: false
    };
  },
  methods: {
    register() {
      axios
        .post("register", {
          name: this.formulario.name,
          email: this.formulario.email,
          password: this.formulario.password
        })
        .then(response => {
          //en caso de ser true, levantamos el mensaje de que ya puede ingresar
          this.success = true;
        })
        .catch(error => {
          //caso contrario, levantamos el mensaje de error y asignamos el objeto errors
          this.error = true;
          this.errors = error.response.data;
        });
    }
  }
};
</script>
