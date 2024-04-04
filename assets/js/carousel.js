new Vue({
  el: '#carousel3d', 
  data: {
    slides: 5
  },
  components: {
    'carousel-3d': window['carousel-3d'].Carousel3d,
    'slide': window['carousel-3d'].Slide
  }
})
  
new Vue({
  el: '#carousel3d-plats',
  data: {
    slides: 6
  },
  components: {
    'carousel-3d': window['carousel-3d'].Carousel3d,
    'slide': window['carousel-3d'].Slide
  }
})
  



  /*const App = () => {
    const [numbers, setNumbers] = React.useState([1, 2, 3, 4, 5, 6, 7, 8, 9])
    const [ median, setMedian ] = React.useState(null)
    const [isAnimating, setIsAnimating] = React.useState(false);
    
    React.useEffect(() => {
      setMedian(Math.floor((numbers.length)/2))
    }, [])
    
    
    const handleScroll = (event) => {
      if (isAnimating) return;
      
      if (event.deltaX < 0) {
        setIsAnimating(true);
        handleMoveRightClick();
      } else if (event.deltaX > 0) {
        setIsAnimating(true);
        handleMoveLeftClick();
      }
    };
  
    React.useEffect(() => {
      // Attach the scroll event listener
      window.addEventListener('wheel', handleScroll);
  
      // Clean up the event listener when component unmounts
      return () => {
        window.removeEventListener('wheel', handleScroll);
      };
    }, []);

    ReactDOM.render(<App />, document.getElementById('root'));
 
    /*
     const disableButtons = () => {
      const buttons = document.querySelectorAll('button.button');
      buttons.forEach(button => (button.disabled = true));
    };
  
    const enableButtons = () => {
      const buttons = document.querySelectorAll('button.button');
      buttons.forEach(button => (button.disabled = false));
    };
    
    const resetAnimation = () => {
      setIsAnimating(false);
    };
    
    const handleNextClick = () => {
      
      if (isAnimating) return;
  
      setIsAnimating(true);
      disableButtons();
      
      const center = document.getElementsByClassName('medianValue')[0]
      const firstLeft = document.getElementsByClassName('firstLeft')[0]
      const firstRight = document.getElementsByClassName('firstRight')[0]
      const secondRight = document.getElementsByClassName(`item${median+2}`)[0]
      const goLeftArr = [...document.querySelectorAll('.item.toTheLeft')]
      const goLeftRightArr = [...document.querySelectorAll(`.item.toTheRight:not(.item${median+2})`)]
      
      
      if (center) center.style.animation = 'centerToLeft 1s ease';
      if (firstLeft) firstLeft.style.animation = 'firstToTheLeft 1s ease';
      if (firstRight) firstRight.style.animation = 'centerFromRight 1s ease';
      if (secondRight) secondRight.style.animation = 'secondToLeft 1s ease';
      if (goLeftArr.length > 0) goLeftArr.forEach(item => item.style.animation = 'leftGoLeft 1s ease')
      if (goLeftRightArr.length > 0) goLeftRightArr.forEach(item => item.style.animation = 'rightGoLeft 1s ease')
      
      
      setTimeout(() => {
        if (center) center.style.animation = 'unset';
        if (firstLeft) firstLeft.style.animation = 'unset';
        if (firstRight) firstRight.style.animation = 'unset';
        if (secondRight) secondRight.style.animation = 'unset';
        if (goLeftArr.length > 0) goLeftArr.forEach(item => item.style.animation = 'unset')
        if (goLeftRightArr.length > 0) goLeftRightArr.forEach(item => item.style.animation = 'unset')
        setNumbers((prevNumbers) => {
          const newNumbers = [...prevNumbers];
          const firstItem = newNumbers.shift();
          newNumbers.push(firstItem);
          return newNumbers;
        });
        resetAnimation();
        enableButtons();
      }, 1000)
      
    };
  
    const handlePrevClick = () => {
      
      if (isAnimating) return;
  
      setIsAnimating(true);
      disableButtons();
      
      const center = document.getElementsByClassName('medianValue')[0]
      const firstLeft = document.getElementsByClassName('firstLeft')[0]
      const firstRight = document.getElementsByClassName('firstRight')[0]
      const secondLeft = document.getElementsByClassName(`item${median-2}`)[0]
      const goRightArr = [...document.querySelectorAll('.item.toTheRight')]
      const goRightLeftArr = [...document.querySelectorAll(`.item.toTheLeft:not(.item${median-2})`)]
      
      
      if (center) center.style.animation = 'centerToRight 1s ease';
      if (firstLeft) firstLeft.style.animation = 'centerFromLeft 1s ease';
      if (firstRight) firstRight.style.animation = 'firstToTheRight 1s ease';
      if (secondLeft) secondLeft.style.animation = 'secondToRight 1s ease';
      if (goRightArr.length > 0) goRightArr.forEach(item => item.style.animation = 'rightGoRight 1s ease')
      if (goRightLeftArr.length > 0) goRightLeftArr.forEach(item => item.style.animation = 'leftGoRight 1s ease')
      
      
      setTimeout(() => {
        if (center) center.style.animation = 'unset';
        if (firstLeft) firstLeft.style.animation = 'unset';
        if (firstRight) firstRight.style.animation = 'unset';
        if (secondLeft) secondLeft.style.animation = 'unset'
        if (goRightArr.length > 0) goRightArr.forEach(item => item.style.animation = 'unset')
        if (goRightLeftArr.length > 0) goRightLeftArr.forEach(item => item.style.animation = 'unset')
        setNumbers((prevNumbers) => {
          const newNumbers = [...prevNumbers];
          const lastItem = newNumbers.pop();
          newNumbers.unshift(lastItem);
          return newNumbers;
        });
        resetAnimation();
        enableButtons();
      }, 1000)
      
    };
  
    return (
      <div className='container-fluid'>
        <div className='slider-container'>
          <div className="item-container" style={numbers.length % 2 === 0 ? {paddingRight: '110px'}: null}>
            {numbers.map((number, index) => (
              <div 
                className={`item item${index} 
                      ${index === median ? 'medianValue' : 
                index === median-1 ? 'firstLeft' :
                index === median+1 ? 'firstRight' : 
                index < median-1 ? 'toTheLeft' : 'toTheRight'}`} 
                key={number} 
                id={`item${index}`} >
                {number}
              </div>
            ))}
          </div>
          <button className='button btn-left' onClick={handlePrevClick}><span>&#9001;</span></button>
          <button className='button btn-right' onClick={handleNextClick}><span>&#9002;</span></button>
        </div>
        
        
      </div>
    );
  }; 
  
  ReactDOM.render(<App />, document.getElementById('root'));
/*$(document).ready(function () {
  const carousel = $('#carouselId');
  const inner = carousel.find('.carousel-inner');

  $.get("data.json", function (data) {
    for (let i = 0; i < data.items.length; i++) {
      const item = $('<div></div>').addClass('carousel-item');
      if (i === 0) {
        item.addClass('active');
      }
      const caption = $('<div></div>').addClass('carousel-caption');
      const image = $('<img>').addClass('img-fluid');
      image.attr('src', data.items[i].image);

      const titre = $('<div></div>').addClass('titre-top');
      titre.text(data.items[i].titre);
      caption.append(titre);

      const description = $('<p></p>').addClass('description');
      description.text(data.items[i].description);
      caption.append(description);

      item.append(image);
      item.append(caption);
      inner.append(item);
    }

    // Appel de la fonction galleryspin
    galleryspin(0);
  });/*


*/