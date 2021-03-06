function edit_doc_field(t) {
    var e = $("#" + t).text();
    $("#" + t + "-input").val(e), $("#" + t).addClass("hidden"), $("#" + t + "-input").removeClass("hidden")
}

function save_doc_field(t, e) {
    e = $("#" + t + "-input").val();
    $("#" + t).text(e), $("#" + t).removeClass("hidden"), $("#" + t + "-input").addClass("hidden"), get_table_total()
}

function add_table_row(t, e = "invoice") {
    event.preventDefault();
    var d = $("#" + t + " tr").length;
    newRow = d + 1;
    var o = row_html(newRow, t, e);
    $("#" + t).append(o), get_table_total(t)
}

function remove_table_row(t, e) {
    prodID = $("#" + t).data("id"), $("#" + t).remove(), $("#prod-id-field-" + prodID).val(""), get_table_total(e)
}

function add_invoice_to_rpt(t) {
    $("#invoices-report-form").append('<input type="hidden" name="invoice_id[]" value="' + t + '">')
}

function update_invoice(t, e, d, o) {
    $.post("/update-invoice", {
        value: t,
        field: e,
        id: d,
        sales: o,
        _token: $('meta[name="csrf-token"]').attr("content")
    }, function(t, e) {})
}

function get_table_total(t = "invoice-table-body") {
    var e = 0;
    $("#" + t + " tr").each(function() {
        var t = parseFloat($("#" + this.id + "-td-4").text()),
            d = parseFloat($("#" + this.id + "-td-5").text()) / 100;
        e += t + d
    });
    var d = 100 * (e - Math.floor(e));
    $("#grand-total-shs").text(Math.floor(e)), $("#grand-total-cts").text(d.toFixed(0))
}

function row_html(t, e, d) {
    var o = '<tr id="' + e + "-table-body-row-" + t + '">';
    return o += '<td><span class="fas fa-times-circle" onclick="remove_table_row(\'' + e + "-table-body-row-" + t + "','" + e + "')\"></span>", o += '<strong id="' + e + "-table-body-row-" + t + '-td-1" onclick="edit_doc_field(this.id)">Managu</strong>', o += '<input id="' + e + "-table-body-row-" + t + '-td-1-input" type="text" class="hidden" name="" value="" onfocusout="save_doc_field(\'' + e + "-table-body-row-" + t + "-td-1',this.value)\">", o += "</td>", o += "<td>", o += '<strong id="' + e + "-table-body-row-" + t + '-td-2" onclick="edit_doc_field(this.id)">Nyau</strong>', o += '<input id="' + e + "-table-body-row-" + t + '-td-2-input" type="text" class="hidden" name="" value="" onfocusout="save_doc_field(\'' + e + "-table-body-row-" + t + "-td-2',this.value)\">", o += "</td>", o += "<td>", o += '<strong id="' + e + "-table-body-row-" + t + '-td-3" onclick="edit_doc_field(this.id)">100</strong>', o += '<input id="' + e + "-table-body-row-" + t + '-td-3-input" type="text" class="hidden" name="" value="" onfocusout="save_doc_field(\'' + e + "-table-body-row-" + t + "-td-3',this.value)\">", o += "</td>", "invoice" == d && (o += "<td>", o += '<strong id="' + e + "-table-body-row-" + t + '-td-4" onclick="edit_doc_field(this.id)">100</strong>', o += '<input id="' + e + "-table-body-row-" + t + '-td-4-input" type="text" class="hidden" name="" value="" onfocusout="save_doc_field(\'' + e + "-table-body-row-" + t + "-td-4',this.value)\">", o += "</td>", o += '<td class="table-highlight">', o += '<strong id="' + e + "-table-body-row-" + t + '-td-5" onclick="edit_doc_field(this.id)">00</strong>', o += '<input id="' + e + "-table-body-row-" + t + '-td-5-input" type="text" class="hidden" name="" value="" onfocusout="save_doc_field(\'' + e + "-table-body-row-" + t + "-td-5',this.value)\">", o += "</td>"), o += "</tr>"
}
