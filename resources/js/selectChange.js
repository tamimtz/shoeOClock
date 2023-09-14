const category = document.getElementById('category');
const subCategory = document.getElementById('subCategory');


const optionsMap = {
    clothings: ['T-shirts', 'Polo', 'Shirts', 'Pants', 'Jackets & Coats', 'Underwear & Socks'],
    footwear: ['Trainers', 'Running Shoes', 'Formal Shoes', 'Boots', 'Sports Shoes', 'Slides & Sandals', 'Walking'],
    option3: ['subOption5', 'subOption6'],
    option4: ['subOption7', 'subOption8'],

};

function updateSubCategoryOptions() {

    const selectedValue = category.value;
    const options = optionsMap[selectedValue] || [];


    subCategory.innerHTML = '';


    options.forEach(optionValue => {
        const option = document.createElement('option');
        option.value = optionValue;
        option.textContent = optionValue;
        subCategory.appendChild(option);
    });


}

category.addEventListener('change', updateSubCategoryOptions);

updateSubCategoryOptions();