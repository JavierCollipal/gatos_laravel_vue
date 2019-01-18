<template>
    <el-container>
        <el-header>
            <el-row>
                <el-breadcrumb separator="/">
                    <el-breadcrumb-item :to="{ path: '/' }">Gatos</el-breadcrumb-item>
                    <el-breadcrumb-item>Creador de gatitos</el-breadcrumb-item>
                </el-breadcrumb>
            </el-row>
        </el-header>

        <el-main>
        </el-main>

        <el-footer>

        </el-footer>
    </el-container>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
            }
        },
        methods: {
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
