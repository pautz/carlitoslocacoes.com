# Carlito's Locações

## Nova Funcionalidade: ID no Barbante para Localização de Bebês

Estamos entusiasmados em anunciar uma nova e inovadora funcionalidade em nosso site Carlito's Locações. A partir de agora, você pode usufruir da tecnologia de **ID no Barbante** para aumentar a segurança e localização de bebês!

### O que é o ID no Barbante?

O ID no Barbante é um recurso que permite rastrear a localização de bebês através de um identificador seguro e discreto, preso à chupeta ou à roupa do bebê.

### Benefícios

- Maior segurança em locais movimentados
- Tranquilidade para os pais
- Fácil de usar e discreto

### Código ID Barbante Botão Estilizado em seu projeto.

```html
<style>
.stylized-button {
    font-size: 16px;
    color: #fff;
    background-color: #008CBA; /* Ajuste para a cor desejada */
    border: none;
    padding: 10px 20px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.stylized-button:hover {
    background-color: #005f73; /* Cor ao passar o mouse */
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
  bottom: 0; /* Fixado na parte inferior da página */
  left: 50%; /* Centralizado horizontalmente */
  transform: translateX(-50%); /* Ajusta para alinhar ao centro */
  z-index: 1000; /* Mantém o botão acima de outros elementos */
}


</style>
<div class="responsive-container">
    <a href="https://carlitoslocacoes.com/site6/site2/" target="_blank" class="stylized-button">ID no Barbante</a>
</div>

# ID no Barbante

Um aplicativo Python que permite criar um botão interativo, móvel e funcional utilizando **Tkinter**.

## Instalação do Python

Para rodar este projeto, siga os passos abaixo para instalar o Python pela Microsoft Store:

1. **Acesse a Microsoft Store**:
   - Procure pela Microsoft Store no menu Iniciar do Windows e abra o aplicativo.

2. **Busque por Python**:
   - Use a barra de busca e digite "Python".

3. **Escolha uma versão**:
   - Instale a versão mais recente do Python (recomendado: Python 3.10 ou superior).

4. **Instale o Python**:
   - Clique em "Obter" ou "Instalar" para iniciar o processo.

5. **Configuração após a instalação**:
   - Confirme a instalação no Prompt de Comando (CMD) usando `python --version`.
   - Instale bibliotecas adicionais, caso necessário, com `pip install biblioteca`.

## Execução do Código

1. **Salve o código**:
   - Copie o código abaixo e salve-o em um arquivo chamado `idnobarbante.py`.

```python
import tkinter as tk
import webbrowser

def button_action():
    url = "https://carlitoslocacoes.com/site6/site2"
    webbrowser.open(url)

def start_move(event):
    global moving
    moving = True
    global offset_x, offset_y
    offset_x = event.x
    offset_y = event.y

def move_button(event):
    if moving:
        new_x = event.x_root - offset_x
        new_y = event.y_root - offset_y
        button.place(x=new_x, y=new_y)

def stop_move(event):
    global moving
    moving = False

root = tk.Tk()
root.title("Overlay")
root.geometry(f"{root.winfo_screenwidth()}x{root.winfo_screenheight()}")
root.attributes('-topmost', True)
root.overrideredirect(True)
root.configure(bg='white')
root.attributes('-transparentcolor', 'white')

moving = False

button = tk.Label(root, text="ID no Barbante", font=("Arial", 12), fg="blue", bg="lightgray", bd=1, relief="solid")
button.place(x=100, y=100)

button.bind('<Button-2>', start_move)
button.bind('<B2-Motion>', move_button)
button.bind('<ButtonRelease-2>', stop_move)

root.mainloop()

