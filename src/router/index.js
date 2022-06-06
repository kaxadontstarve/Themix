import About from "../pages/About";
import Posts from '../pages/Posts';


export const routes =[
    { path: '/about', component: About, exact: true },
    { path: '/posts', component: Posts, exact: true },
    
]