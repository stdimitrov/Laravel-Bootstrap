@extends('parts.doctype')
@include('parts.navbarLog')

@section('page-content')
<div class="container">
    <h2>Здравейте</h2>
    <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
    <div class="panel-group">
        <div class="panel panel-default">

            <div class="panel-body">
                <p>
                    Добре дошли в моето пробно сайтче.За да продължите напред,
                    ще се наложи да си направире регистрация. :)
                </p>
                <p>
                    За направата на "това нещо" са използвани Laravel 5.2 и Bootstrap
                </p>
                <p>
                    След като се регитрирате и влезнете ще се запознаете с идеята
                    на проекта. В менютата ще имате лична страничка и достъп до други страници.
                    Разполагаме и с админ панел :).
                </p>
            </div>
        </div>
    </div>
</div>
    @stop