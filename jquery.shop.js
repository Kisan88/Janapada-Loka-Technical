(function ( $ ) {
    $.Shop = function( element ) {
        this.init();
    };

    $.Shop.prototype = { 
        init: function() {
            this.cartPrefix = "test-";
            this.cartName = this.cartPrefix + "cart";
            this.shippingRates = this.cartPrefix + "shipping-rates";
            this.total = this.cartPrefix + "total";
            this.storage = sessionStorage;

            this.$formAddToCart = this.$element.find( "form.add-to-cart" );
            this.$formCart = this 

        }
    }
})