const items        = document.getElementById('items')
const templateCard = document.getElementById('template-card').content
const fragmento    = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => {
    fetchData()
})

const fetchData = async () => {
    try{
        const res  = await fetch('js/api_autos.json')
        const data = await res.json()
        console.log(data)
        mostrarProductos(data)
    }catch (error){
        console.log(error)
    }
}
//------------------------------ mostrarProductos
    const mostrarProductos = data =>{
        data.forEach(producto => {
            templateCard.querySelector('h5').textContent = producto.title
            templateCard.querySelector('p').textContent = producto.precio
            templateCard.querySelector('img').setAttribute("src", producto.thumbnailUrl)

            const clone = templateCard.cloneNode(true)
            fragmento.appendChild(clone)
        });
        items.appendChild(fragmento)
    }