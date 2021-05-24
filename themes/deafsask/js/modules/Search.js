class Search {
    constructor(){
        //1. describe and create/initiate our object
        this.openSearchOverlay = document.getElementById('fa-search')
        this.closeSearchOverlay = document.getElementById('fa-window-close')
        this.searchOverlay = document.getElementById('search-overlay')
        this.searchField = document.getElementById('search-term')
        this.isOverlayOpen = false
        this.events()
    }

    //2.events
    events(){
        this.openSearchOverlay.addEventListener('click', () => this.openOverlay())
        this.closeSearchOverlay.addEventListener('click', () => this.closeOverlay())
        document.addEventListener('keydown', (e) => this.keyPressDispatcher(e))
        this.searchField.addEventListener('keydown', () => this.typingLodgic())
    }
    //3. methods
    typingLodgic(){
        console.log('asshat')
    }
    openOverlay(){
        this.searchOverlay.classList.add('search-overlay-active')
        document.body.style.overflow = 'hidden'
        this.isOverlayOpen = true
        this.searchField.focus()
        console.log('open method')
    }
    closeOverlay(){
        this.searchOverlay.classList.remove('search-overlay-active')
        document.body.style.overflow = 'unset'
        this.isOverlayOpen = false
        console.log('close Method')
    }
    keyPressDispatcher(e){
        if(e.keyCode == 83 && this.isOverlayOpen == false){
            this.openOverlay()
        }
        if(e.keyCode == 27 && this.isOverlayOpen == true){
            this.closeOverlay()
        }
    }
}

export default Search