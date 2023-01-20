const API_GRUPOS = '../../app/api/grupos.php?action=';
const ENDPOINT_PAIS = '../../app/api/pais.php?action=readAll';

document.addEventListener('DOMContentLoaded', function () {
    readRows(API_GRUPOS);
});

function fillTable(dataset) {
    let content = '';
    dataset.map(function (row) {
        content += `
    <tr>
        <td>${row.codigo}</td>
        <td>${row.nombre}</td>
        <td>
            <a href="#" onclick="openUpdateDialog(${row.grupoid})" class="btn" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Editar</a> /
            <a href="#" onclick="openDeleteDialog(${row.grupoid})" class="btn">Eliminar</a>
        </td>
    </tr>
    `;
    });
    document.getElementById('tbody-rows').innerHTML = content;
    let dataTable = new DataTable('#data-table', {
        labels: {
            placeholder: 'Buscar grupos...',
            perPage: '{select} Grupos por página',
            noRows: 'No se encontraron grupos',
            info: 'Mostrando {start} a {end} de {rows} grupos'
        }
    });
}

function openUpdateDialog(id) {
    document.getElementById('update-form').reset();
    const data = new FormData();
    data.append('grupoid', id);
    fetch(API_GRUPOS + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        if (request.ok) {
            request.json().then(function (response) {
                if (response.status) {
                    document.getElementById('grupoidac').value = response.dataset.grupoid;
                    document.getElementById('nombre_ac').value = response.dataset.nombre;
                    document.getElementById('codigo_ac').value = response.dataset.codigo;
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
    let action = '';
    saveRow(API_GRUPOS, "create", 'save-form', null);
    document.getElementById('save-form').reset();
});

document.getElementById('update-form').addEventListener('submit', function (event) {
    event.preventDefault();
    updateRow(API_GRUPOS, 'update', 'update-form', 'update-modal');
});

function openDeleteDialog(id) {
    const data = new FormData();
    data.append('grupoid', id);
    confirmDelete(API_GRUPOS, data);
}