<template>
    <el-container>
        <el-header>
            <el-row>
                <el-breadcrumb separator="/">
                    <el-breadcrumb-item :to="{ path: '/' }">Gatos</el-breadcrumb-item>
                    <el-breadcrumb-item>Mantenedor de categorias</el-breadcrumb-item>
                </el-breadcrumb>
            </el-row>
        </el-header>

        <el-main>
            <!--caracter/pelajes-->
            <el-row :gutter="20">
                <!--caracteres-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-row>
                            <el-button type="primary" class="pull-right"
                                       v-on:click="crearFormulario('Caracter'),modales.insertar = true">Añadir Caracter
                            </el-button>
                            <el-col>
                                <el-table

                                    :data="caracter"
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="caracter"
                                        label="Caracter"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default"
                                                       @click="solicitarSeleccionado('Caracter',scope.row.id)"
                                                       size="mini">Modificar
                                            </el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('caracter',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('caracter',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>

                            </el-col>
                        </el-row>
                    </div>
                </el-col>
                <!--pelajes-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right"
                                   v-on:click="crearFormulario('Pelaje'),modales.insertar = true">Añadir pelaje
                        </el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                    :data="pelaje"
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="pelaje"
                                        label="Pelaje"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('pelaje',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('pelaje',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>

                            </el-col>
                        </el-row>

                    </div>
                </el-col>
            </el-row>
            <!--tipo/complexion-->
            <el-row :gutter="20">
                <!--tipos-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right"
                                   v-on:click="crearFormulario('Tipo'),modales.insertar = true">Añadir tipo
                        </el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                    :data="tipo"
                                    border
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="tipo"
                                        label="Tipo"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('tipo',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('tipo',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>

                            </el-col>
                        </el-row>
                    </div>
                </el-col>
                <!--complexion-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right"
                                   v-on:click="crearFormulario('Complexion'),modales.insertar = true">Añadir complexion
                        </el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                    :data="complexion"
                                    border
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="complexion"
                                        label="Complexion"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>

                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('complexion',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('complexion',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </el-col>
                        </el-row>

                    </div>
                </el-col>
            </el-row>
            <!--color/raza-->
            <el-row :gutter="20">
                <!--color-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right"
                                   v-on:click="crearFormulario('Color'),modales.insertar = true">Añadir color
                        </el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                    :data="colores"
                                    border
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="color"
                                        label="Color"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('color',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('color',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </el-col>
                        </el-row>
                    </div>
                </el-col>
                <!--raza-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right"
                                   v-on:click="crearFormulario('Raza'),modales.insertar = true">Añadir raza
                        </el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                    :data="razas"
                                    border
                                    height="250"
                                    style="width: 100%"
                                >
                                    <el-table-column
                                        prop="raza"
                                        label="Raza"
                                        width="180">
                                    </el-table-column>
                                    <el-table-column
                                        prop="activo"
                                        label="Activo"
                                        width="180">
                                    </el-table-column>

                                    <el-table-column
                                        label="Operaciones">
                                        <template slot-scope="scope">
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'"
                                                       @click="desactivarSeleccionado('raza',scope.row.id)"
                                                       size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else
                                                       @click="activarSeleccionado('raza',scope.row.id)"
                                                       size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </el-col>
                        </el-row>
                    </div>
                </el-col>
            </el-row>
            <!--insertar-->
            <el-dialog
                v-bind:title="'Registrar'+' '+datosFormularios.label"
                :visible.sync="modales.insertar"
                width="30%"
                center
            >
                <el-form :inline="true"
                         :model="datosFormularios"
                         class="demo-form-inline">
                    <el-form-item v-bind:label="datosFormularios.label">
                        <el-input v-model="datosFormularios.valor"
                                  type="text"
                                  maxlength="100"
                        ></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="agregarRegistros">Añadir</el-button>
                    </el-form-item>
                </el-form>
            </el-dialog>
            <!--modificar-->
            <el-dialog
                v-bind:title="'Modificar '+formularioModificar.label"
                :visible.sync="modales.modificar"
                width="30%"
                center
            >
                <el-form :inline="true" :model="formularioModificar" class="demo-form-inline">

                    <el-form-item v-bind:label="formularioModificar.label">
                            <el-input
                                    type="text"
                                    maxlength="100"
                                    v-model="formularioModificar.valor"></el-input>
                        </el-form-item>

                    <el-form-item>
                            <el-button type="primary" @click="actualizarSeleccionado">Actualizar</el-button>
                        </el-form-item>
                    </el-form>


            </el-dialog>
        </el-main>

        <el-footer>

        </el-footer>
    </el-container>
</template>

<script>
    export default {
        mounted() {
            this.listado();
        },
        data() {
            return {
                modales: {
                    insertar: false,
                    modificar: false
                },
                datosFormularios: {
                    valor: '',
                    label: '',
                    tipo: '',

                },
                formularioModificar: {
                    valor: '',
                    label: '',
                    id: 0
                },
                caracter: [],
                pelaje: [],
                tipo: [],
                complexion: [],
                colores: [],
                razas: []
            }
        },
        methods: {
            listado() {
                const loading = this.$loading({
                    lock: true,
                    text: 'Obteniendo registros',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                });

                axios.get('api/listadoMantenedores').then(response => {
                    this.caracter = response.data.caracter;
                    this.pelaje = response.data.pelaje;
                    this.tipo = response.data.tipo;
                    this.complexion = response.data.complexion;
                    this.colores = response.data.colores;
                    this.razas = response.data.razas;
                    loading.close();
                });

            },
            agregarRegistros() {

                let rutaAPI = '';
                switch (this.datosFormularios.tipo) {
                    case  'Caracter':
                        rutaAPI = 'agregarCaracter';
                        break;
                    case  'Color':
                        rutaAPI = 'agregarColor';
                        break;
                    case  'Complexion':
                        rutaAPI = 'agregarComplexion';
                        break;
                    case  'Tipo':
                        rutaAPI = 'agregarTipo';
                        break;
                    case  'Raza':
                        rutaAPI = 'agregarRaza';
                        break;
                    case  'Pelaje':
                        rutaAPI = 'agregarPelaje';
                        break;

                }
                axios.post('api/' + rutaAPI, {
                    valor: this.datosFormularios.valor
                }).then(response => {
                    this.datosFormularios.valor = '';
                    this.modales.insertar = false;
                    this.$message({
                        message: response.data.mensaje,
                        type: 'succes'
                    });
                    this.listado();
                }).catch(error => {
                    this.datosFormularios.valor = '';
                    this.modales.insertar = false;
                    this.$message({
                        message: error.response.data.mensaje,
                        type: 'error'
                    });
                });
            },
            solicitarSeleccionado(categoria, id) {
                this.formularioModificar.label = categoria;
                axios.get('api/solicitarSeleccionado', {params: {categoria: categoria, id: id}}).then(
                        response => {
                            switch (categoria) {
                                case 'Raza':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.raza;
                                    break;
                                case 'Tipo':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.tipo;
                                    break;
                                case 'Color':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.color;
                                    break;
                                case 'Complexion':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.complexion;
                                    break;
                                case 'Caracter':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.caracter;
                                    break;
                                case 'Pelaje':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.pelaje;
                                    break;

                            }
                            this.modales.modificar = true;
                        }
                    )

            },
            actualizarSeleccionado() {

                axios.put('api/actualizarSeleccionado',
                    {
                        categoria: this.formularioModificar.label,
                        id: this.formularioModificar.id,
                        valor: this.formularioModificar.valor
                    })
                    .then(
                        response => {
                            /*switch (categoria) {
                                case 'Raza':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.raza;
                                    break;
                                case 'Tipo':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.tipo;
                                    break;
                                case 'Color':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.color;
                                    break;
                                case 'Complexion':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.complexion;
                                    break;
                                case 'Caracter':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.caracter;
                                    break;
                                case 'Pelaje':
                                    this.formularioModificar.id = response.data.seleccionado.id;
                                    this.formularioModificar.valor = response.data.seleccionado.pelaje;
                                    break;

                            }*/
                            this.modales.modificar = false;
                            this.$message({
                                message: 'Actualizacion exitosa',
                                type: 'succes'

                            });
                            this.listado();
                        }
                    )

            },
            crearFormulario(tipo) {
                this.datosFormularios.label = tipo;
                this.datosFormularios.tipo = tipo;
            },
            activarSeleccionado(categoria, id) {
                /*primero va el mensaje*/
                /*luego el titulo*/
                /*para finalizar entregamos el mensaje despues del response de axios*/
                let articulo = 'el';
                let seleccionado = 'seleccionado';
                if (articulo === 'raza') {
                    articulo = 'la';
                    seleccionado = 'seleccionada';
                }
                this.$confirm('Desea activar ' + articulo + ' ' + categoria + ' ' + seleccionado, 'Advertencia', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    axios.put('api/activarSeleccionado', {categoria: categoria, id: id}).then(response => {
                        this.$message({
                            type: 'success',
                            message: 'Activacion completada'
                        });
                        this.listado();
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Activacion Cancelada'
                    });
                });
            },
            desactivarSeleccionado(categoria, id) {
                /*primero va el mensaje*/
                /*luego el titulo*/
                /*para finalizar entregamos el mensaje despues del response de axios*/
                let articulo = 'el';
                let seleccionado = 'seleccionado';
                if (articulo === 'raza') {
                    articulo = 'la';
                    seleccionado = 'seleccionada';
                }
                this.$confirm('Desea desactivar ' + articulo + ' ' + categoria + ' ' + seleccionado, 'Advertencia', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    axios.put('api/desactivarSeleccionado', {categoria: categoria, id: id}).then(response => {
                        this.$message({
                            type: 'success',
                            message: 'Desactivacion completada'
                        });
                        this.listado();
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Desactivacion Cancelada'
                    });
                });
            }
        }
    }
</script>

<style scoped>
    .el-row {
        margin-bottom: 20px;

    }

    last-child {
        margin-bottom: 0;
    }

    .el-col {
        border-radius: 4px;
    }

    .bg-purple-dark {
        background: #99a9bf;
    }

    .bg-purple {
        background: #d3dce6;
    }

    .el-table .warning-row {
        background: oldlace;
    }

    .el-table .success-row {
        background: #f0f9eb;
    }

    .bg-purple-light {
        background: #e5e9f2;
    }

    .grid-content {
        border-radius: 4px;
        min-height: 36px;
    }

    .row-bg {
        padding: 10px 0;
        background-color: #f9fafc;
    }
</style>
