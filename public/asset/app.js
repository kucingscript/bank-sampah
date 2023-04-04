function carousel() {
    return {
        active: 0,
        init() {
            var flkty = new Flickity(this.$refs.carousel, {
                wrapAround: true,
                autoPlay: 1500,
                prevNextButtons: false,
            });
            flkty.on("change", (i) => (this.active = i));
        },
    };
}
