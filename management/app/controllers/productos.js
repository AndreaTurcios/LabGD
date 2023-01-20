const API_PRODUCTOS = '../../app/api/productos.php?action=';
const ENDPOINT_SUBGRUPO = '../../app/api/subgrupo.php?action=readSubgrupo';
document.addEventListener('DOMContentLoaded', function () {
    fillSelect(ENDPOINT_SUBGRUPO,'subgrupopro', null);
    fillSelect(ENDPOINT_SUBGRUPO,'subgrupoac', null);
    readRows(API_PRODUCTOS);
}); 

function fillTable(dataset) {
    let content = '';
    dataset.map(function (row) {
        content += `
            <tr>
                <td>${row.id}</td>
                <td>${row.nombre}</td>
                <td>${row.descripcion}</td>
                <td>${row.precio_normal}</td>
                <td>${row.precio_rebajado}</td>
                <td>${row.cantidad}</td>
                <td>${row.imagen}</td>
                <td>${row.categoria}</td>
                <td>
                <a href="#" onclick="openUpdateDialog(${row.id})" class="btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a>/
                <a href="#" onclick="openDeleteDialog(${row.id})" class="btn waves-effect red tooltipped" data-tooltip="Eliminar">Eliminar</a>
                </td>
            </tr>
        `;
    });
 document.getElementById('tbody-rows').innerHTML = content;
 let dataTable = new DataTable('#data-table', {
    labels: {
        placeholder: 'Buscar productos...',
        perPage: '{select} productos por página',
        noRows: 'No se encontraron productos',
        info:'Mostrando {start} a {end} de {rows} productos'
    }
});
}

function openUpdateDialog(id) {
    document.getElementById('update-form').reset();
    const data = new FormData();
    data.append('productoid', id);
    fetch(API_PRODUCTOS + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        if (request.ok) {
            request.json().then(function (response) {
                if (response.status) {
                    document.getElementById('productoidac').value = response.dataset.productoid;
                    document.getElementById('servicioacpro').value = response.dataset.productoservicio;
                    document.getElementById('codigoproac').value = response.dataset.codigo;
                    document.getElementById('descripcionacpro').value = response.dataset.descripcion;

                    const prec=Math.round (response.dataset.preciolista)
                    const precli=Math.round (response.dataset.preciolistaconiva)
                    document.getElementById('preciolistaact').value = prec;
                    document.getElementById('preciolistaivaac').value = precli;

                    document.getElementById('subgrupoac').value = response.dataset.subgrupoid;      
                } else {
                    sweetAlert(2, response.exception, null);
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}

document.getElementById('save-form').addEventListener('submit', function (event) {
    event.preventDefault();
    saveRow(API_PRODUCTOS, 'create', 'save-form', 'save-modal');
});

document.getElementById('update-form').addEventListener('submit', function (event) {
    event.preventDefault();
    updateRow(API_PRODUCTOS, 'update','update-form','update-modal');
});

function openDeleteDialog(id) {
    const data = new FormData();
    data.append('productoid', id);
    confirmDelete(API_PRODUCTOS, data);
}


