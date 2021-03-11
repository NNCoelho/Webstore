<div class="container-fluid rodape-overlay">
    <div class="row">
        <div class="col-8 offset-2 text-center">
            <h3 class="mt-5">Resumo da encomenda</h3>
            <hr>
            <!-- Tabela do resumo da encomenda -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th class="text-start">Descrição</th>
                        <th>Quantidade</th>
                        <th class="text-end">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 0;
                    $total_rows = count($shoppingcart);
                    ?>
                    <!-- Ciclo da lista dos produtos -->
                    <?php foreach ($shoppingcart as $produto) : ?>
                        <?php if ($index < $total_rows - 1) : ?>
                            <tr>
                                <td class="align-middle"><img src="assets/images/produtos/<?= $produto['imagem']; ?>" class="img-fluid" width="30px"></td>
                                <td class="align-middle text-start"><?= $produto['titulo'] ?></td>
                                <td class="align-middle"><?= $produto['qtd'] ?></td>
                                <td class="align-middle text-end"><h6><?= '€' . number_format($produto['preco'], 2, ',', '.'); ?></h6></td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="align-middle text-end">Valor total:</td>
                                <td class="align-middle text-end"><h5><?= '€' . number_format($produto, 2, ',', '.'); ?></h5></td>
                            </tr>
                        <?php endif; ?>
                        <?php $index++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Dados do cliente -->
            <div class="text-start">
                <h4 class="bg-dark text-white p-2">Dados do cliente</h4>
                <div class="row">
                    <div class="col">
                        <p><b>Nome:</b> <small><?= $cliente->nome_completo ?></small></p>
                        <p><b>Morada:</b> <small><?= $cliente->morada ?></small></p>
                        <p><b>Cidade:</b> <small><?= $cliente->cidade ?></small></p>
                    </div>
                    <div class="col">
                        <p><b>E-mail:</b> <small><?= $cliente->email ?></small></p>
                        <p><b>Telefone:</b> <small><?= $cliente->telefone ?></small></p>
                    </div>
                </div>
                <!-- Morada alternativa -->
                <div class="form-check">
                    <input class="form-check-input" onchange="defineAddressAlt()" type="checkbox" name="check_morada_alt" id="check_morada_alt">
                    <label class="form-check-label" for="check_morada_alt"><small>Definir uma morada alternativa</small></label>
                </div>
                <div class="col-8 text-start" id="morada_alt" style="display: none">
                    <div class="mt-3">
                        <small><label class="form-label">Morada:</label></small>
                        <input class="form-control" type="text" id="text_morada_alt" placeholder="Insira aqui a sua morada de entrega alternativa">
                    </div>
                    <div class="mt-3">
                        <small><label class="form-label">Cidade:</label></small>
                        <input class="form-control" type="text" id="text_cidade_alt" placeholder="Insira aqui a sua cidade de entrega alternativa">
                    </div>
                    <div class="mt-3">
                        <small><label class="form-label">E-mail:</label></small>
                        <input class="form-control" type="email" id="text_email_alt" placeholder="Insira aqui o seu e-mail de contacto alternativo">
                    </div>
                    <div class="mt-3">
                        <small><label class="form-label">Telefone:</label></small>
                        <input class="form-control" type="text" id="text_telefone_alt" placeholder="Insira aqui o seu telefone de contacto alternativo">
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col text-start">
                    <a href="?a=shoppingcart" class="btn btn-secondary btn-sm btn-120">Cancelar</a>
                </div>
                <div class="col text-end">
                    <a href="#" class="btn btn-primary btn-sm">Escolher método de pagamento</a>
                </div>
            </div>
        </div>
    </div>
</div>