import React from 'react';
import { Link } from 'react-router-dom';

function Testimony(props) {
  return (
    <>
      <li className='testimony-card__item'>
        <Link className='testimony-card__item__link' to={props.path}>
          <figure className='testimony-card__item__pic-wrap' data-category={props.label}>
            <img
              className='testimony-card__item__img circle'
              alt='Testimony'
              src={props.src}
            />
          </figure>
          <div className='testimony-card__item__info'>
            <h5 className='testimony-card__item__text'>
              "{props.text}"
            </h5>
          </div>
        </Link>
      </li>
    </>
  );
}

export default Testimony;
