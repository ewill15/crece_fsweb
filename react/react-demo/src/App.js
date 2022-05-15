/*El logo por defecto importado lo pueden eliminar porque no lo usaremos */
import './App.css';
import React from 'react';
import Navbar from './components/Navbar';
import Home from './components/pages/Home';

/*https://stackoverflow.com/questions/63124161/attempted-import-error-switch-is-not-exported-from-react-router-dom*/
/*En versiones anteriores*/
/*import { BrowserRouter as Router, Switch, Route } from 'react-router-dom'; */
/*Actualmente es */
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'

import Services from './components/pages/Services';
import Products from './components/pages/Products';
import SignUp from './components/pages/SignUp';
function App() {
  return (
    <div className="App">
      <Router> 
        <Navbar/>
        <Routes>
          /* las correciones que se hicieron fueron:*/
          /* 1. cambiar component por element*/
          /* 2. los componentes  Home,Services Products y SignUp  se colocaron entre < y />*/
          <Route path='/' exact element={<Home/>} />
          <Route path='/services' element={<Services/>} />
          <Route path='/products' element={<Products/>} />
          <Route path='/sign-up' element={<SignUp/>} />
        </Routes>
      </Router>
    </div>
  );
}

export default App;
