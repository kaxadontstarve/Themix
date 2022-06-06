import '../../../styles/App.css';
import { Link } from "react-router-dom";


const NavBar = () => {
    return (
        <div className='navbar'>
            <div className='navbar__links'>
                <Link to='/about'>About site</Link>
                <Link to='/posts'>Posts</Link>
            </div>
        </div>
    )
}


export default NavBar;