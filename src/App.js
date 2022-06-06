import React from 'react';
import './styles/App.css';
import { BrowserRouter} from "react-router-dom";
import Navbar from './Components/Ui/Navbar/Navbar';
import AppRouter from './Components/AppRouter';



function App() {
return(

<BrowserRouter>
<Navbar></Navbar>
<AppRouter></AppRouter>
</BrowserRouter>
)
}

export default App;
