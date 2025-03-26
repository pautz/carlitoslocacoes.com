Carlito's Locações
Nova Funcionalidade: ID no Barbante para Localização de Bebês
Estamos entusiasmados em anunciar uma nova e inovadora funcionalidade em nosso site Carlito's Locações. A partir de agora, você pode usufruir da tecnologia de ID no Barbante para aumentar a segurança e localização de bebês!

O que é o ID no Barbante?
O ID no Barbante é um recurso que permite rastrear a localização de bebês através de um identificador seguro e discreto, preso à chupeta ou à roupa do bebê.

Benefícios
Maior segurança em locais movimentados

Tranquilidade para os pais

Fácil de usar e discreto

Código ID Barbante Botão Estilizado em seu Projeto
Para implementar o botão estilizado no HTML, use este estilo e botão:

html
<style>
.stylized-button {
  font-size: 16px;
  color: #fff;
  background-color: #008CBA;
  border: none;
  padding: 10px 20px;
  text-align: center;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}
.stylized-button:hover {
  background-color: #005f73;
}
.responsive-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  align-items: center;
  justify-content: center;
}
.stylized-button {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  z-index: 1000;
}
</style>
<div class="responsive-container">
  <a href="https://carlitoslocacoes.com/site6/site2/" target="_blank" class="stylized-button">ID no Barbante</a>
</div>
ID no Barbante
Um aplicativo Python que permite criar um botão interativo, móvel e funcional utilizando Tkinter.

Instalação do Python
Para rodar este projeto, siga os passos abaixo para instalar o Python pela Microsoft Store:

Acesse a Microsoft Store:

Procure pela Microsoft Store no menu Iniciar do Windows e abra o aplicativo.

Busque por Python:

Use a barra de busca e digite "Python".

Escolha uma versão:

Instale a versão mais recente do Python (recomendado: Python 3.10 ou superior).

Instale o Python:

Clique em "Obter" ou "Instalar" para iniciar o processo.

Configuração após a instalação:

Confirme a instalação no Prompt de Comando (CMD) usando python --version.

Instale bibliotecas adicionais, caso necessário, com pip install biblioteca.

Execução do Código
Salve o código: Salve o seguinte script como idnobarbante.py:

python
import tkinter as tk
import webbrowser

# Função executada ao clicar no botão (abrir link)
def button_action():
    url = "https://carlitoslocacoes.com/site6/site2"  # Link associado ao botão
    webbrowser.open(url)  # Abre o link no navegador padrão

# Função para iniciar o movimento do botão
def start_move(event):
    global moving
    moving = True
    global offset_x, offset_y
    offset_x = event.x
    offset_y = event.y

# Função para mover o botão
def move_button(event):
    if moving:
        new_x = event.x_root - offset_x
        new_y = event.y_root - offset_y
        button.place(x=new_x, y=new_y)

# Função para parar o movimento do botão
def stop_move(event):
    global moving
    moving = False

# Configuração da janela principal
root = tk.Tk()
root.title("Overlay")
root.geometry(f"{root.winfo_screenwidth()}x{root.winfo_screenheight()}")  # Janela ocupa tela inteira
root.attributes('-topmost', True)  # Janela sempre no topo
root.overrideredirect(True)  # Remove barra da janela
root.configure(bg='white')  # Cor de fundo transparente
root.attributes('-transparentcolor', 'white')  # Define "white" como transparente

# Estado do movimento
moving = False

# Criação do botão com fundo visível e texto legível
button = tk.Label(root, text="ID no Barbante", font=("Arial", 12), fg="blue", bg="lightgray", bd=1, relief="solid")
button.place(x=100, y=100)  # Posição inicial do botão

# Vincular o clique esquerdo ao botão para abrir o link
button.bind('<Button-1>', lambda event: button_action())

# Bind dos eventos do mouse para movimentação
button.bind('<Button-2>', start_move)    # Clique com o botão do meio do mouse sobre o botão
button.bind('<B2-Motion>', move_button)  # Movimento enquanto o botão do meio é pressionado
button.bind('<ButtonRelease-2>', stop_move)  # Soltar o botão do meio

# Loop principal da aplicação
root.mainloop()
Abra o Prompt de Comando (CMD):

No Windows, pressione Win + R, digite cmd e pressione Enter.

Navegue até a pasta do projeto:

Use o comando cd para acessar a pasta onde está salvo idnobarbante.py.

Execute o script:

No CMD, rode o comando: python idnobarbante.py.

Funcionalidades
O botão abre o link para o site definido ao clicar.

Movimente o botão clicando e arrastando com a roda do mouse:

Pressione a roda do mouse sobre o botão para começar a mover.

Arraste o botão enquanto mantém a roda pressionada.

Solte a roda do mouse para parar o movimento.

Licença
Este projeto está sob a MIT License.
