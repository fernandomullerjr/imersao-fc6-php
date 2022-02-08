# Imersão FullCycle 6 em PHP - Monitoramento de tweets
![Imersão Full Stack && Full Cycle](https://events-fullcycle.s3.amazonaws.com/events-fullcycle/static/site/img/grupo_4417.png)

Participe gratuitamente: https://imersao.fullcycle.com.br/

## Sobre o repositório
Esse repositório contém todo código utilizado durante as aulas para referência **em PHP & [Swoole](https://github.com/swoole/swoole-src)**.

| Back end       | Front end      |
|----------------|----------------|
| <s>NestJS</s>  | <s>Next.js</s> |
| [**Hyperf**](https://hyperf.io/) | [**Viewi**](https://viewi.net/)  |

> ⚠️ Este repositório procura ser fiel ao que é passado na aula e não representa necessariamente o que seria feito numa aplicação PHP.

> ⚠️ A ideia não é fazer uma competição de linguagens, mas mostrar como é possível criar aplicações de alto nível tambem com PHP.

## Comparação
| Banco de dados | ORM              | Scheduler        | Cache (ambos Redis-driven)  | Fila de processamento (ambos Redis-driven) |
|----------------|------------------|------------------|------------------------|---------------------------------------|
| <s>MongoDB</s> | <s>Mongoose</s>  | <s>`@nestjs/scheduler`</s> | <s>`cache-manager`</s> | <s>`bull`</s>                         |
| MySQL          | ORM do próprio Hyperf | `hyperf/crontab` | `hyperf/cache`         | `hyperf/async-queue`                  |


Faça seu fork e também nos dê uma estrelinha para nos ajudar a divulgar o projeto.

As instruções de instalações estão no README.md de cada projeto.

## Ordem recomendada de execução

* Hyperf
