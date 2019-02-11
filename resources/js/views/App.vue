  <template>
        <div>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <router-link :to="{name: 'inicio'}" class="navbar-brand">Gatos</router-link>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <router-link :to="{name: 'ingreso'}" class="navbar-brand">Ingresa</router-link>
                            <router-link :to="{name: 'registro'}" class="navbar-brand">Registrate</router-link>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <router-link :to="{name: 'listado'}" class="navbar-brand">Mis gatos</router-link>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <router-link :to="{name: 'creador'}" class="navbar-brand">Agrega mas gatitos :=)</router-link>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <router-link :to="{name: 'mantenedor'}" class="navbar-brand">Mantenedores :=)</router-link>
                        </ul>

                    </div>
                </div>
            </nav>
            <main class="py-4">
                <router-view></router-view>
            </main>
        </div>
    </template>
        <script>
    export default {}
    </script>
