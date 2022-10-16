<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <header>
        <h1>dragones</h1>
        {if !isset($smarty.session.USER_ID)}
            <li><a aria-current="page" href="login">Login</a></li>
        {else} 
            <li><a aria-current="page" href="logout">Logout ({$smarty.session.USER_MAIL})</a></li>
        {/if}
        <ul>
        {foreach from=$mitologias item=$mito}
            <li><a href="mitologia/{$mito->id}">ver {$mito->mitologia}</a></li>
        {{/foreach}}
        </ul>
    </header>