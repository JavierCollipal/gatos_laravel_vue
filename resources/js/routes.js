import Bienvenido from './views/bienvenido';
import Listado from './views/listado';
import Mantenedor from './views/mantenedores';
import Creador from './views/creador';
import Modificar from './views/modificar';
import Ingreso  from './views/ingreso';
import Registro from './views/registro';

export default [
    {
        path: '/',
        name: 'dashboard',
        component: Bienvenido
    },

    {
        path: '/listado',
        name: 'listado',
        component: Listado
    },
    {
        path: '/modificar',
        name: 'modificar',
        component: Modificar
    },
    {
        path: '/mantenedores',
        name: 'mantenedor',
        component: Mantenedor
    },
    {
        path: '/creador',
        name: 'creador',
        component: Creador
    },
    {
        path: '/login',
        name: 'ingreso',
        component: Ingreso
    },
    {
        path: '/registro',
        name: 'registro',
        component: Registro
    }
]
