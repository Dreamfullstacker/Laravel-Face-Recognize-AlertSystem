$(function(){window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}=window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}||{};window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"]=$("#%1$s").DataTable(%2$s);

$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"].on('click', '[data-destroy]', function (e) {
e.preventDefault();
if (!confirm("{{ __('Are you sure to delete this record?') }}")) {
return;
}
axios.delete($(this).data('destroy'), {
'_method': 'DELETE',
})
.then(function (response) {
{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"].ajax.reload();
})
.catch(function (error) {
console.log(error);
});
});

});
