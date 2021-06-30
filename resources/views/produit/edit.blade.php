@extends('base')

@section('title','Edition produit')

@section('titrePage','Produits')

@section('sousTitrePage','Formulaire Modification Produit')

@section('contenu')
@foreach ($errors->all() as $message)
    {{$message}} <br>
@endforeach
<div class="container">
    <form action="{{route('produit.update',compact('produit'))}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <label for="nom">Nom</label>
                <input value="{{old('nom') ?? $produit->nom}}" required="required" class="form-control" type="text" name="nom" id="nom">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="prix">Prix</label>
                <input value="{{old('prix') ?? $produit->prix}}" required="required" min="1" class="form-control" type="number" name="prix" id="prix">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="quantiteEnStock">Quantité en Stock</label>
                <input value="{{old('quantiteEnStock') ?? $produit->quantiteEnStock}}" required="required" min="0" class="form-control" type="number" name="quantiteEnStock" id="quantiteEnStock">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="code">Code</label>
                <input value="{{old('code') ?? $produit->code}}" required="required" class="form-control" type="text" name="code" id="code">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="couleur">Couleur</label>
                <input value="{{old('couleur') ?? $produit->couleur}}" class="form-control" type="color" name="couleur" id="couleur">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="etat">Etat</label>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="etat" id="etat" value="true" checked>
                    Actif
                  </label>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="etat" id="etat" value="false">
                    Inactif
                  </label>
                </div>
            </div>
            <div class="col-12 pt-2">
                <button type="submit" class="btn btn-primary float-right ml-2">Enregistrer</button>
                <button type="reset" class="btn btn-secondary float-right">
                    Vider <i class="fa fa-refresh" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-12">

    </div>
</div>

@endsection
