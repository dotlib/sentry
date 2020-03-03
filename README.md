Como rodar?

- Altere "SENTRY_SECRET_KEY" para uma string randômica de 32 caracteres.

  - Já está uma padrão.

- Execute "docker-compose up -d".

- Execute "docker-compose exec sentry sentry upgrade" para configurar o banco de dados e criar usuário administrador, isso demora um pouco.
  # Would you like to create a user account now? [Y/n]: y
        * Seu email e sua senha devem entrar aqui, você vai usar depois

(Opcional) Execute docker-compose exec sentry pip install sentry-slack se você quiser o plugin slack, isso pode ser feito depois!

- Execute "docker-compose restart sentry".

* O Sentry agora está em execução na porta pública 9000.
