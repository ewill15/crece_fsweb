import logo from './logo.svg';
import './App.css';
import Services from '.components/pages/Home';
import Products from '.components/pages/Home';
import SignUp from '.components/pages/Home';

function App() {
  return (
    <Router>
      <Navbar>
        <Switch>
          <Route path='/' exact component={Home}/>
          <Route path='/services' component={Services}/>
          <Route path='/products' component={Products}/>
          <Route path='/sign-up' component={SignUp}/>
        </Switch>
      </Navbar>
    </Router>
  );
}

export default App;
