const container = document.querySelector('.container-mainImage');
const image = container.querySelector('img');

container.addEventListener('mousemove', (e) => {
    const { offsetX, offsetY } = e;
    const { clientWidth, clientHeight } = container;
    const xPercentage = offsetX / clientWidth;
    const yPercentage = offsetY / clientHeight;
    const scale = 1.5; // Adjust this value as needed for the desired zoom level
    
    const translateX = (xPercentage - 0.5) * (scale - 1) * 200; // Increased translation values
    const translateY = (yPercentage - 0.5) * (scale - 1) * 200; // Increased translation values
    
    image.style.transform = `scale(${scale}) translate(${translateX}%, ${translateY}%)`;
});

container.addEventListener('mouseleave', () => {
    image.style.transform = 'scale(1) translate(0%, 0%)';
});