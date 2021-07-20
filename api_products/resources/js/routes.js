import ExampleComponent from './components/ExampleComponent'
import App from './components/app'

const routes = [
    {
        path: '/example',
        component: ExampleComponent
    },
    {
        path: '/products',
        component: App
    }
];

export default routes