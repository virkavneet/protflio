import React from "react";
import { NavLink } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.css';
import { Navbar, Nav, NavItem,Container } from 'react-bootstrap';
import "./Header.scss";

function Header() {
  return (
    <div className="header-main">
      <Navbar collapseOnSelect expand="lg" fixed='top'>
        <Container>
          <Navbar.Brand>
            Avneet Virk<span className='purple-color'>.</span>
          </Navbar.Brand>
          <Navbar.Toggle aria-controls="responsive-navbar-nav" />
          <Navbar.Collapse id="responsive-navbar-nav">
            <Nav>
              <NavItem>
                <NavLink to='about'>About</NavLink>
                <NavLink to='work'>Work</NavLink>
                <NavLink to='blog'>Blog</NavLink>
                <NavLink to='contact'>Contact</NavLink>
              </NavItem>
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
    </div>
  );
}

export default Header;
