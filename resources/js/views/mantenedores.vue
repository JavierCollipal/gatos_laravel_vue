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
            <el-row :gutter="20">
                <!--caracteres-->
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right" v-on:click="crearFormulario('Caracter'),modales.insertar = true">Añadir Caracter</el-button>
                        <el-row>
                            <el-col>
                                <el-table

                                        :data="caracter"
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
                                            <el-button type="default" size="mini">Modificar</el-button>
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
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
                        <el-button type="primary" class="pull-right">Añadir pelaje</el-button>
                        <el-row>
                            <el-col>
                                <el-table

                                        :data="pelaje"
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
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
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
            <el-row :gutter="20">
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right">Añadir tipo</el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                        :data="tipo"
                                        border
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
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>

                            </el-col>
                        </el-row>
                    </div>
                </el-col>
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right">Añadir complexion</el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                        :data="complexion"
                                        border
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
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
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
            <el-row :gutter="20">
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right">Añadir color</el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                        :data="colores"
                                        border
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
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
                                                Activar
                                            </el-button>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </el-col>
                        </el-row>
                    </div>
                </el-col>
                <el-col :span="12">
                    <div class="grid-content bg-purple">
                        <el-button type="primary" class="pull-right">Añadir raza</el-button>
                        <el-row>
                            <el-col>
                                <el-table
                                        :data="razas"
                                        border
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
                                            <el-button type="danger" v-if="scope.row.activo === 'S'" size="mini">
                                                Desactivar
                                            </el-button>
                                            <el-button type="primary" v-else @click="activar(scope.row.id)" size="mini">
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
<el-dialog
        title="Registrar"
        :visible.sync="modales.insertar"
        width="30%"
        center
>
    <el-form :inline="true"
             :model="datosFormularios"
             class="demo-form-inline">
        <el-form-item v-bind:label="datosFormularios.label">
            <el-input v-model="datosFormularios.valor"></el-input>
        </el-form-item>
        <el-form-item>
            <el-button type="primary" @click="agregarRegistros">Añadir</el-button>
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
                    insertar: false
                },
                datosFormularios:{
                    valor: '',
                    label: '',
                    tipo: '',

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

                axios.get('api/listadoMantenedores').then(response => {
                    this.caracter = response.data.caracter;
                    this.pelaje = response.data.pelaje;
                    this.tipo = response.data.tipo;
                    this.complexion = response.data.complexion;
                    this.colores = response.data.colores;
                    this.razas = response.data.razas;
                });

            },
            activar(categoria,id) {
                /*primero va el mensaje*/
                /*luego el titulo*/
                /*para finalizar entregamos el mensaje despues del response de axios*/

                this.$confirm('Desea activar al gatito seleccionado ;=)?', 'Advertencia', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    axios.put('api/activar', {id: id}).then(responser => {
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
            desactivar(id) {
                /*primero va el mensaje*/
                /*luego el titulo*/
                /*para finalizar entregamos el mensaje despues del response de axios*/
                this.$confirm('Desea desactivar al gatito seleccionado ;=(?', 'Advertencia', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    axios.put('api/desactivar', {id: id}).then(response => {
                        this.$message({
                            type: 'success',
                            message: 'Activacion completada'
                        });
                        this.listado();
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Desactivación Cancelada'
                    });
                });
            },
            agregarRegistros(){

                let rutaAPI = '';
                switch (this.datosFormularios.tipo) {
                    case  'Caracter':
                        rutaAPI = 'agregarCaracter';
                        break;
                    case  'Pelaje':
                        rutaAPI = 'agregarPelaje';
                        break;
                }
                axios.post('api/'+rutaAPI,{
                    valor: this.datosFormularios.valor
                }).then(response => {
                    this.modales.insertar = false;
                    this.$message({
                        message: response.data.mensaje,
                        type: 'succes'
                    });
                    this.listado();
                }).catch(error =>{
                    this.modales.insertar = false;
                    this.$message({
                        message: error.response.data.mensaje,
                        type: 'warning'
                    });
                });
            },
            crearFormulario(tipo){
              this.datosFormularios.label = tipo;
                this.datosFormularios.tipo = tipo;
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