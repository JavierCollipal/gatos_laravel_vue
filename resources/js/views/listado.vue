<template>

        <div class="flex-center position-ref full-height">
        <div class="container">
            <el-table
                    :data="gatos"
                    border
                    style="width: 100%">
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

            </el-table>
        </div>
    </div>
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
    </style>
