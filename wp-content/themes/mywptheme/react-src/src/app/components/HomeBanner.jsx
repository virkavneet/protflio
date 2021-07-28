import React from 'react';
import './Homebanner.scss';

function Homebanner(){
    return(
        <div className='home-banner'>
            <div className='container'>
                <p className='banner-title'>
                    Hi, I am Avneet
                </p>
                <h1 className='banner-desc'>
                    a web developer from chandigarh, India. Currently working at <span className='purple-color'>Digital Natives</span> I design and develop the web.
                </h1>
                <p className='scroll-line'>scroll</p>
            </div>
        </div>
    );
}

export default Homebanner;