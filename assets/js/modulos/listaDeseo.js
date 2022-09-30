const tableDeseo = document.querySelector('#tableDeseo tbody');
document.addEventListener('DOMContentLoaded', function ()
{
    getListaDeseo()
});
function getListaDeseo() {
    const url = base_url + 'principal/listaDeseo';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaDeseo));
    http.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
       let html = '';
       res.forEach(producto => {
        html += `
        <tr>
            <td><img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="${producto.nombre}" width="100"></td>
            <td>${producto.nombre}</td>
            <td><span class="badge bg-success">$ ${producto.precio}</span></td>
            <td>${producto.cantidad}</td>
            <td><button class="btn btn-danger btnEliminarDeseo" type="button" prod="${producto.id}">Eliminar</button>
            <button class="btn btn-success addCart" type="button" prod="${producto.id}">Comprar</button>
            </td>
        </tr>     
        `;
       });
       tableDeseo.innerHTML = html;
       btnAgregarProdcuto();
       btnEliminarD();
    } 
 }

}
function btnEliminarD() {
  let eliminarLista = document.querySelectorAll('.btnEliminarDeseo');
     for (let i = 0; i < eliminarLista.length; i++) {
     eliminarLista[i].addEventListener('click', function(){
            let idProducto = eliminarLista[i].getAttribute('prod');
            eliminarListaDeseo(idProducto);
     })
      
     }
}
function eliminarListaDeseo(idProducto) {
  for (let i = 0; i < listaDeseo.length; i++) {
      if (listaDeseo[i]['idProducto'] == idProducto) {
          listaDeseo.splice(i,1);
      }
      
  }
 localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));
 getListaDeseo();
 cantidadDeseo();
 
 const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }

})

Toast.fire({
  icon: 'success',
  title: 'Deseo eliminado'
})

}
function btnAgregarProdcuto() {
let agregarPro = document.querySelectorAll('.addCart');
   for (let i = 0; i < agregarPro.length; i++) {
    agregarPro[i].addEventListener('click', function(){
          let idProducto = agregarPro[i].getAttribute('prod');
          agregarCarrito(idProducto, 1, true);
   });
   }
}