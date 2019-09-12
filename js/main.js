//Displaying image and Describtion of hotel after selection
let hotels = {
    signatureLux: {
        name: 'Signature Lux Hotel',
        price: 1200,
        image: 'http://placehold.it/400x400'
    },

    tableBay: {
        name: 'The Table Bay Hotel',
        image: 'http://placehold.it/400x400'
    },

    treeHouse: {
        name: 'The Tree House Boutique Hotel',
        image: 'http://placehold.it/400x400'
    },

    greyHotel: {
        name: 'The Grey Hotelr',
        image: 'http://placehold.it/400x400'
    }
};

let hotelSelection = document.getElementById('hotelSelection')
hotelSelection.addEventListener('change', function () {
    let selectedHotel = hotels[hotelSelection.options[hotelSelection.selectedIndex].value];
    document.getElementById('hotel-image').innerHTML = "<img src=" + selectedHotel.image + "/>";
    document.getElementById('hotel-details').innerHTML = selectedHotel.name;
    document.getElementById('hotel-price').innerHTML = selectedHotel.price;

});
//End of Displaying image and Describtion of hotel after selection