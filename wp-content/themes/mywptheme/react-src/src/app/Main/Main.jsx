import React from "react";
import {BrowserRouter,Switch,Route} from "react-router-dom";
import Home from "./Home";

function Main(){
    return(
        <>
       <BrowserRouter>
        <Switch>
            <Route exact path="/" component={Home} />
            <Route exact path="/about" component={Home} />
        </Switch>
       </BrowserRouter>
       </>
    );
}

export default Main;
