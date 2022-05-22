import React from 'react';
import './Testimonies.css';
import Testimony from './Testimony';

function Testimonies() {
  return (
    <div className='testimony-card'>
      <h1>Check out these Testimonies of our services!</h1>
      <div className='testimony-card__container'>
        <div className='testimony-card__wrapper'>
          <ul className='testimony-card__items'>
            <Testimony
              src='images/person1.jpg'
              text='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et ligula ut ipsum tempus dapibus ac nec mi. Sed bibendum lacus et lacus tempor tempus. Quisque accumsan finibus nisi. Praesent rutrum eros quam, vel ultrices metus dictum at. Aenean cursus consequat augue eu gravida. '
              label='Testimony 1'
              path='/testimonies'
            />
            <Testimony
              src='images/person2.jpg'
              text=' Aliquam rutrum hendrerit consequat. Ut vulputate, ex non porta consectetur, lacus velit interdum mi, nec feugiat sapien felis at sem. Vestibulum congue viverra eleifend.'
              label='Testimony 2'
              path='/testimonies'
            />
          </ul>
          <ul className='testimony-card__items'>
            <Testimony
              src='images/person2.jpg'
              text='Vivamus mattis blandit egestas. In lacinia vehicula facilisis. Aliquam tristique vel metus faucibus malesuada. Duis eget efficitur enim. Phasellus rutrum ut eros id rutrum. Suspendisse pretium sollicitudin laoreet. Nunc nec ultrices arcu.'
              label='Testimony 3'
              path='/testimonies'
            />
            <Testimony
              src='images/person3.jpg'
              text='Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut hendrerit tortor ut est commodo feugiat.'
              label='Testimony 4'
              path='/testimonies'
            />
          </ul>
        </div>
      </div>
    </div>
  );
}

export default Testimonies;
