const API_SUBGRUPO = '../../app/api/subgrupo.php?action=';
const ENDPOINT_GRUPO = '../../app/api/subgrupo.php?action=readGrupo';
document.addEventListener('DOMContentLoaded', function () {
    fillSelect(ENDPOINT_GRUPO,'grupo_f', null);
    fillSelect(ENDPOINT_GRUPO,'grupoac', null);
    readRows(API_SUBGRUPO);
});

function fillTable(dataset) {
    let content = '';
    dataset.map(function (row) {
        content += `
            <tr>    
                <td>${row.codigo}</td>
                <td>${row.nombresubgrupo}</td>
                <td>${row.nombregrupo}</td>
                <td>
                    <a href="#" onclick="openUpdateDialog(${row.subgrupoid})"class="btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a> /
                    <a href="#" onclick="openDeleteDialog(${row.subgrupoid})"class="btn">Eliminar</a>
                </td>
            </tr>
        `;
    });

document.getElementById('tbody-rows').innerHTML = content;
 let dataTable = new DataTable('#data-table', {
    labels: {
        placeholder: 'Buscar subgrupos...',
        perPage: '{select} Subgrupos por página',
        noRows: 'No se encontraron subgrupos',
        info:'Mostrando {start} a {end} de {rows} subgrupos'
    }
});
}

document.getElementById('save-form').addEventListener('submit', function (event) {
    event.preventDefault();
    let action = '';
    saveRow(API_SUBGRUPO, 'create', 'save-form', null);
    document.getElementById('save-form').reset();
});

function openUpdateDialog(id) {
    document.getElementById('update-form').reset();
    const data = new FormData();
    data.append('subgrupoid', id);
    fetch(API_SUBGRUPO + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        if (request.ok) {
            request.json().then(function (response) {
                if (response.status) {
                    document.getElementById('idsubg2').value = response.dataset.subgrupoid;
                    document.getElementById('nombreac').value = response.dataset.nombre;
                    document.getElementById('codigoac').value = response.dataset.codigo;
                    document.getElementById('grupoac').value = response.dataset.grupoid;
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

document.getElementById('update-form').addEventListener('submit', function (event) {
    event.preventDefault();
    updateRow(API_SUBGRUPO, 'update', 'update-form', 'update-modal');
});

function openDeleteDialog(id) {
    const data = new FormData();
    data.append('subgrupoid', id);
    confirmDelete(API_SUBGRUPO, data);
}
