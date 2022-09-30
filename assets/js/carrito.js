const btnAddDeseo =document.querySelectorAll('.btnAddDeseo');
const btnAddCarrito =document.querySelectorAll('.btnAddCarrito');
const btnCantidadDeseo =document.querySelector('#btnCantidadDeseo');
const btnCantidadCarrito =document.querySelector('#btnCantidadCarrito');
const verCarrito =document.querySelector('#verCarrito');
const tableCarrito =document.querySelector('#tableCarrito tbody');

let listaDeseo,listaCarrito;
document.addEventListener('DOMContentLoaded', function ()
{
  if (localStorage.getItem('listaDeseo') != null) {
    listaDeseo = JSON.parse(localStorage.getItem('listaDeseo'));
  }
  if (localStorage.getItem('listaCarrito') != null) {
    listaCarrito = JSON.parse(localStorage.getItem('listaCarrito'));
  }
      
    for (let i = 0; i < btnAddDeseo.length; i++) {
        btnAddDeseo[i].addEventListener('click', function(){
            let idProducto = btnAddDeseo[i].getAttribute('prod');
          agregarDeseo(idProducto);
        })
        
    }
    for (let i = 0; i < btnAddCarrito.length; i++) {
      btnAddCarrito[i].addEventListener('click', function(){
        let idProducto = btnAddCarrito[i].getAttribute('prod');
      agregarCarrito(idProducto, 1);
    })
    
    }
    cantidadDeseo();
    cantidadCarrito();
    // ver lista de carrito
    const myModal = new bootstrap.Modal(document.getElementById('myModal'))
    verCarrito.addEventListener('click',function () {
      getListaCarrito();
      myModal.show();
    })

});
// agregar lista de deseos
function agregarDeseo(idProducto) {
  if (localStorage.getItem('listaDeseo')== null) {
    listaDeseo = [];
  } else {
    let listaExistente = JSON.parse(localStorage.getItem('listaDeseo'));
    for (let i = 0; i < listaExistente.length; i++) {
  if (listaExistente[i]['idProducto']== idProducto) {

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
      icon: 'warning',
      title: 'Ya existe en deseos'
    })
    return;
  }
      
    }
    listaDeseo.concat(localStorage.getItem('listaDeseo'));
  }
    listaDeseo.push({
        'idProducto': idProducto,
        'cantidad' : 1
    })
    localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));

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
        title: 'Agregado en deseos'
      })
    
    cantidadDeseo();
}

function cantidadDeseo() {
    let listas = JSON.parse(localStorage.getItem('listaDeseo'));

    if (listas !=null ) {
        btnCantidadDeseo.textContent = listas.length;
    } else {
        btnCantidadDeseo.textContent = 0;
    }
    
}

// agregar al carrito
function agregarCarrito(idProducto, cantidad, accion = false) {
  if (localStorage.getItem('listaCarrito')== null) {
    listaCarrito = [];
  } else {
    let listaExistente = JSON.parse(localStorage.getItem('listaCarrito'));
    for (let i = 0; i < listaExistente.length; i++) {

    if (accion) {
      eliminarListaDeseo(idProducto);
    }

  if (listaExistente[i]['idProducto']== idProducto) {

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
      icon: 'warning',
      title: 'Producto ya agregado'
    })
    return;
  }
      
    }
    listaCarrito.concat(localStorage.getItem('listaCarrito'));
  }
  listaCarrito.push({
        'idProducto': idProducto,
        'cantidad' : cantidad
    })
    localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));

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
        title: 'Producto agregado'
      })
    
      cantidadCarrito();
}

function cantidadCarrito() {
  let listas = JSON.parse(localStorage.getItem('listaCarrito'));

  if (listas !=null ) {
    btnCantidadCarrito.textContent = listas.length;
  } else {
    btnCantidadCarrito.textContent = 0;
  }
  
}

// ver carrrito
function getListaCarrito() {
  const url = base_url + 'principal/listaCarrito';
  const http = new XMLHttpRequest();
  http.open('POST', url, true);
  http.send(JSON.stringify(listaCarrito));
  http.onreadystatechange = function(){
  if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
     let html = '';
     res.productos.forEach(producto => {
      html += `
      <tr>
          <td><img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="${producto.nombre}" width="100"></td>
          <td>${producto.nombre}</td>
          <td><span class="badge bg-success">$ ${producto.precio}</span></td>
          <td>${producto.cantidad}</td>
          <td><span class="badge bg-info">$ ${producto.subTotal}</span></td>
          <td><button class="btn btn-primary btnEliminarCarrito" type="button" prod="${producto.id}">Borrar</button></td>
      </tr>     
      `;
     });
     tableCarrito.innerHTML = html;
     document.querySelector('#totalGeneral').textContent = res.total;
    btnEliminarC();
  } 
}

}
function btnEliminarC() {
  let eliminarLista = document.querySelectorAll('.btnEliminarCarrito');
     for (let i = 0; i < eliminarLista.length; i++) {
     eliminarLista[i].addEventListener('click', function(){
            let idProducto = eliminarLista[i].getAttribute('prod');
            eliminarListaCarrito(idProducto);
     })
      
     }
}
function eliminarListaCarrito(idProducto) {
  for (let i = 0; i < listaCarrito.length; i++) {
      if (listaCarrito[i]['idProducto'] == idProducto) {
        listaCarrito.splice(i,1);
      }
      
  }
 localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));
 getListaCarrito();
 cantidadCarrito();
 
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