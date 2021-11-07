@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title ">REGISTRO DE NOVO CLIENTE</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <form action="{{ route('clients.store') }}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Nome do Cliente</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Introduza o Nome e o Sobrenome">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="surname" class="control-label mb-1">Apelido</label>
                                                <input id="surname" name="surname" type="text" class="form-control surname valid" data-val="true" aria-required="true" aria-invalid="false" aria-describedby="surname" placeholder="Introduza o Apelido">
                                                <span class="help-block field-validation-valid" data-valmsg-for="surname" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="local" class="control-label mb-1">Residencia</label>
                                                <input id="local" name="local" type="tel" class="form-control local identified visa" value="" data-val="true" placeholder="Ex; Q.04 / Casa 27">
                                                <span class="help-block" data-valmsg-for="local" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact1" class="control-label mb-1">Contacto (+258)</label>
                                                        <input id="contact1" name="contact1" type="tel" class="form-control cc-exp" value="" data-val="true" placeholder="825248888">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="contact2" class="control-label mb-1">Contacto Alt (+258)</label>
                                                    <div class="input-group">
                                                        <input id="contact2" name="contact2" type="tel" class="form-control cc-cvc" value="" data-val="true" placeholder="845248888">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="adrress" class="control-label mb-1">Bairro de Residencia</label>
                                                <select name="adrress" id="adrress" class="form-control">
                                                            <option value="1">TSN</option>
                                                        </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="amount" class="control-label mb-1">Valor a Pagar</label>
                                                        <input id="amount" name="amount" type="tel" class="form-control cc-exp" value="" data-val="true" placeholder="400 MT">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="service_type_id" class="control-label mb-1">Tipo de Servico</label>
                                                    <div class="service_type_id">
                                                        <select name="service_type_id" id="" class="form-control">
                                                            <option value="1">RLa - Recolha de Lixo Apenas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-client_type_id" class="control-label mb-1">Tipo de Cliente</label>
                                                        <select name="client_type_id" id="client_type_id" class="form-control">
                                                            <option value="1">Residencial</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="from" class="control-label mb-1">Data de Inicio</label>
                                                    <div class="input-group">
                                                        <input id="from" name="from" type="date" class="form-control cc-cvc" value="" data-val="true" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status" class="control-label mb-1">Status</label>
                                                <select name="status" id="" class="form-control">
                                                            <option value="1">Activo</option>
                                                        </select>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Submeter e Salvar</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
</div>
@endsection