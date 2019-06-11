<template>

    <el-container>
        <el-header>
            <el-row>
                <el-breadcrumb separator="/">
                    <el-breadcrumb-item :to="{ path: '/' }">Gatos</el-breadcrumb-item>
                    <el-breadcrumb-item>Listado</el-breadcrumb-item>

                </el-breadcrumb>
            </el-row>

        <el-row >

        </el-row>
        </el-header>
        <el-main>
            <el-table
                    :data="gatos"
                    border
                    style="width: 100%"

            >
                <el-table-column
                        prop="nombre"
                        label="Nombre"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="razas.raza"
                        label="Raza"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="colores.color"
                        label="Color"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="pelajes.pelaje"
                        label="Pelaje"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="complexion.complexion"
                        label="Complexion"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="caracter.caracter"
                        label="Caracter"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="tipo.tipo"
                        label="Tipo"
                        width="180">
                </el-table-column>
                <el-table-column
                        fixed="right"
                        label="Operaciones"
                        width="120">
                    <template slot-scope="scope">
                        <el-button type="danger" v-if="scope.row.activo === 'S'" @click="desactivar(scope.row.id)" size="small">Desactivar</el-button>
                        <el-button type="primary" v-else  @click="activar(scope.row.id)" size="small">Activar</el-button>
                    </template>
                </el-table-column>
            </el-table>
        </el-main>

        <el-footer>

        </el-footer>
    </el-container>



</template>
    <script>
    export default {
        created(){
            this.listado();
        },
        data() {
            return {
                gatos: []
            }
        },
        methods: {
            listado(){
                axios.get('api/listado').then(response=>{
                    this.gatos = response.data.gatos;
                });

            },
            activar(id) {
                /*primero va el mensaje*/
                /*luego el titulo*/
                /*para finalizar entregamos el mensaje despues del response de axios*/
                console.log(id);
                this.$confirm('Desea activar al gatito seleccionado ;=)?', 'Advertencia', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    axios.put('api/activar',{id:id}).then(responser =>{
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
                    axios.put('api/desactivar',{id:id}).then(response =>{
                        this.$message({
                            type: 'success',
                            message: 'Desactivación completada'
                        });
                        this.listado();
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Desactivación Cancelada'
                    });
                });
            }
        }
    }
    </script>
  <style scoped>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 60px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
        color: #000000;
    }
    .el-table .warning-row {
        background: oldlace;
    }
    .el-table .success-row {
        background: #f0f9eb;
    }
    </style>
