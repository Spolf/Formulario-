<form method="post">
  <label for="">Nome Completo:</label>
  <input type="text" name="nome"><br><br>
  <label for="">Data de Nascimento:</label>
  <input type="text" class="form-control" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off"><br><br>
  <label for="">CPF:</label>
  <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" maxlength="14" size="14"><br><br>
  <label for="">Nome do PAI:</label>
  <input type="text" name="nome"><br><br>
  <label for="">Nome da MAE:</label>
  <input type="text" name="nome"><br><br>
  <label for="">Endereço:</label>
  <input type="text" name="endereco"><br><br>
  <label for="">Numero:</label>
  <input type="number" name="numero"><br><br>
  <label for="">Bairro:</label>
  <input type="text" name="bairro"><br><br>
  <label for="">CEP:</label>
  <input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000" maxlength="9" size="9"><br><br>
  <label for="">Cidade/Estado:</label>
  <input type="text" name="cidade_estado"><br><br>
  <label for="">Telefone (DDD+Telefone): </label>
  <input type="text" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000"><br><br>
  <label for="">Enviar Curriculo:</label>
  <input type="file" name="curriculo"><br><br>
  <label for="">Email:</label>
  <input type="email" name="email"><br><br>
  <label for="">DADOS ACADEMICOS</label><br><br>
  <label for="">Instituição de Ensino:</label>
  <input type="text" name="instituicao"><br><br>
  <label for="">Curso:</label>
  <input type="text" name="curso"><br><br>
  <label for="">Periodo:</label>
  <input type="text" name="periodo"><br><br>  
  <label for="">Turno:</label><br>
  <input type="radio" id="manha" name="turno" value="manha">
  <label for="">Manha</label><br>
  <input type="radio" id="tarde" name="turno" value="tarde">
  <label for="">Tarde</label><br>
  <input type="radio" id="noite" name="turno" value="noite">
  <label for="">Noite</label><br><br>
  <label for="">Disponibilidade Estagio: <br></label>
  <input type="radio" id="manha" name="horario" value="manha">
  <label for="">Manha</label><br>
  <input type="radio" id="tarde" name="horario" value="tarde">
  <label for="">Tarde</label><br>
  <label for="">Outro</label>
  <input type="text" name="noite"><br><br>
  <label for="">Declaro para os Devidos fins, que disponho de 04 (quatro) horas diárias e 20 (vinte) horas semanais para dedicação exclusiva ao estágio junto ao Poder Executivo do Estado do Piauí, que não o acumularei com outro estágio, mesmo que não remunerado, e que preencho os requisitos legais constantes no Decreto n° 13.840, de 21 de setembro de 2009, para admissão ao estágio não obrigatório remunerado :</label><br>
  <input type="radio" id="sim" name="lei" value="sim">
  <label for="">Sim</label><br>
  <input type="radio" id="nao" name="lei" value="nao">
  <label for="">Não</label><br><br>
  <label for="">Declaro que todas as informações acima prestadas são verdadeiras, e assumo a inteira responsabilidade pelas mesmas :</label><br>
  <input type="radio" id="sim" name="acordo" value="sim">
  <label for="">Sim</label><br>
  <input type="radio" id="nao" name="acordo" value="nao">
  <label for="">Não</label><br><br>
  <label for="">Comprovante de matricula da instituicao:</label>
  <input type="file" name="matricula"><br><br>
  <button type="button" onclick="alert('Voltar')">Voltar</button>
  <button type="button" onclick="alert('Enviar')">Enviar</button>
</form>











