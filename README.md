# Frontend Mentor - NFT preview card component solution

This is a solution to the [NFT preview card component challenge on Frontend Mentor](https://www.frontendmentor.io/challenges/nft-preview-card-component-SbdUL_w0U). Frontend Mentor challenges help you improve your coding skills by building realistic projects. 

## Table of contents

- [Overview](#overview)
  - [The challenge](#the-challenge)
  - [Screenshot](#screenshot)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
  - [Continued development](#continued-development)
  - [Useful resources](#useful-resources)
- [Author](#author)

**Note: Delete this note and update the table of contents based on what sections you keep.**

## Overview

### The challenge

Users should be able to:

- View the optimal layout depending on their device's screen size
- See hover states for interactive elements

### Screenshot

![](/dist/assets/design/screenshot.jpg)

### Links

- Solution URL: [Add solution URL here](https://your-solution-url.com)
- Live Site URL: [Add live site URL here](https://your-live-site-url.com)

## My process

### Built with

- Semantic HTML5 markup
- CSS custom properties
- Flexbox
- CSS Grid
- Mobile-first workflow
- BEM Methodolgy
- Sass


### What I learned

In this section I applied some of the things I learned such as 'figure' element , alt attribute. 
      
```html
<figure class="card__thumbnail">
        <img src="./assets/images/image-equilibrium.jpg" 
              alt="Equilibrium" 
              class="card__img">
        <div class="card__overlay">
          <img src="./assets/images/icon-view.svg"
                alt="Equilibrium"
                class="card__overlay--img">
        </div>
</figure>
```

I also used this technique by Kevin Powell he recently uploaded on of his Youtube video. 
```css
&__thumbnail {
        display: grid;
        place-items: center;

        & > * {
            grid-column: 1 / -1;
            grid-row: 1 / -1;
        }
    }

    &__img {
        justify-content: center;
        border-radius: .5rem;
        width: 100%;
        object-fit: cover;

    }
}
```

### Continued development

On the future projects Im taking time to fix my previous solutions and also appliying new techniques and stuffs I learned


### Useful resources

- [Using Grid to stack contents](https://www.youtube.com/watch?v=oy2iUDT0mf8) - This helped me applying the overlay without using th e position absolute.

## Author

- Github - [loifloro](https://github.com/loifloro/)
- Frontend Mentor - [@loifloro](https://www.frontendmentor.io/profile/loifloro)
- Twitter - [@loisfloro](https://www.twitter.com/loisfloro)


